var ProfilePicAPI = {};

ProfilePicAPI.version = "v1";
ProfilePicAPI.baseURL = "/tc/api/"+ProfilePicAPI.version;

ProfilePicAPI.loadingTextClass = 'fileUploadLoadingText';
ProfilePicAPI.loadingBarClass = 'fileUploadLoadingBar';
ProfilePicAPI.defaultProfilePic = '/images/user.png';

ProfilePicAPI.Uploader = function(
        fileInputButtons,
        dropZone,
        croppieContainer,
        clearButton,
        saveButton,
        userId,
        onUploadComplete
        ) {

    this.fileInputButtons = fileInputButtons;
    this.dropZone = dropZone;
    this.croppieContainer = croppieContainer;
    this.clearButton = clearButton;
    this.saveButton = saveButton;
    this.userId = userId;
    this.onUploadComplete = onUploadComplete;

    this.photo = null;
    this.max_filesize = 2048576;
    this.defaultPhotoSrc = ProfilePicAPI.defaultProfilePic;
    this.uploadUrl = ProfilePicAPI.baseURL + "/profilePic/" + this.userId;

    var self = this;

    self.init = function() {
        self.fileInputButtons.forEach(function(button) {
            button.onchange = self.addFiles;
        });
        if (self.saveButton) {
            self.saveButton.onclick = self.uploadPhoto;
        }
        if (self.clearButton) {
            self.clearButton.onclick = self.clearUpload;
        }
        if (self.dropZone) {
            self.initializeDropzone();
        }
    };

     self.initializeDropzone = function(){
        //clone dropZone to remove existing event listeners
        var clone = self.dropZone.cloneNode();
        while (self.dropZone.firstChild) {
          clone.appendChild(self.dropZone.lastChild);
        }
        self.dropZone.parentNode.replaceChild(clone, self.dropZone);
        self.dropZone = clone;

        self.dropZone.addEventListener("dragenter",  self.stopProp, false);
        self.dropZone.addEventListener("dragleave",  self.dragExit, false);
        self.dropZone.addEventListener("dragover",  self.dragOver, false);
        self.dropZone.addEventListener("drop",  self.processDroppedFiles, false);
    };

    /**
     * Use this function to set files programmatically
     *
     * @param {type} files
     * @return {undefined}
     */
    self.setFiles = function(files) {
        self.processNewFiles(files);
    };

    self.addFiles = function () {
        self.processNewFiles(this.files);
    };

    self.dragOver = function (ev) {
        self.stopProp(ev);
        self.dropZone.classList.remove("fileDropzoneNormal");
        self.dropZone.classList.add("fileDropzoneHighlight");
        //this.style["backgroundColor"] = "#F0FCF0";
        //this.style["borderColor"] = "#3DD13F";
        //this.style["color"] = "#3DD13F";
    };

    self.dragExit = function (ev) {
        self.stopProp(ev);
        self.dropZone.classList.remove("fileDropzoneHighlight");
        self.dropZone.classList.add("fileDropzoneNormal");
        //dropZone.style["backgroundColor"] = "#FEFEFE";
        //dropZone.style["borderColor"] = "#CCC";
        //dropZone.style["color"] = "#CCC";
    };

    self.stopProp = function (ev) {
        ev.stopPropagation();
        ev.preventDefault();
    };

    self.processDroppedFiles = function (ev) {
        self.stopProp(ev);
        var files = ev.dataTransfer.files;
        self.processNewFiles(files);
    };

    self.clearUpload = function () {
        //Clear upload
        self.photo = null;

        //Clear preview
        self.croppieContainer.innerHTML = "";

        //Clear input button value
        self.fileInputButtons.forEach(function(button) {
            button.value = null;
        });

        // UI Changes
        $(".update-profile__action-wrapper--default-state").removeClass("hidden");
        $(".update-profile__action-wrapper--upload-state").removeClass("active");
        $(".update-profile-photo__draggable-area-wrapper").removeClass("active");

    };

    self.processNewFiles = function (files) {
        var file = files[0];
        if (file.type.match('image.*')) {
            self.clearUpload();
            var fr = new FileReader();
            fr.file = file;
            fr.onloadend = function(ev) {
                if (ev.target.file.size < self.max_filesize) {
                    self.photo = ev.target.file;
                    self.makeProfilePicCroppie(self.croppieContainer, ev.target.result);
                    // UI Changes
                    $(".update-profile__action-wrapper--default-state").addClass("hidden");
                    $(".update-profile__action-wrapper--upload-state").addClass("active");
                    $(".update-profile-photo__draggable-area-wrapper").removeClass("error").addClass("active");
                    setTimeout(function(e) {
                        $(".cr-image").attr("alt", "Preview Profile Photo");
                    }, 2000)
                } else {
                    // Indicates file is too large.
                    $(".update-profile-photo__draggable-area-wrapper").removeClass("active").addClass("error");
                }
            };
            fr.readAsDataURL(fr.file);
        } else {
            //TODO: indicate imporper file type
        }
    };

    self.makeProfilePicCroppie = function(imageElement, imageSrc) {

        var croppie = new Croppie(imageElement, {
            viewport: { width: 200, height: 200, type: 'circle'},
            boundary: { width: 200, height: 200 },
            showZoomer: true,
            enableZoom: true,
            enforceBoundary: true,
            mouseWheelZoombool: true
        });
        croppie.bind({
            url: imageSrc
        }).then(function() {
            croppie.setZoom(0.15);
        });
        return croppie;
    };

    self.uploadPhoto = function() {
        if (self.photo) {
            var xhr = new XMLHttpRequest();
            if ("withCredentials" in xhr) {
                // Check if the XMLHttpRequest object has a "withCredentials" property.
                // "withCredentials" only exists on XMLHTTPRequest2 objects.
                xhr.open("PUT", self.uploadUrl);

            } else if (typeof XDomainRequest != "undefined") {
                // Otherwise, check if XDomainRequest.
                // XDomainRequest only exists in IE, and is IE's way of making CORS requests.
                xhr = new XDomainRequest();
                xhr.open("PUT", self.uploadUrl);
            } else {
                // Otherwise, CORS is not supported by the browser.
                xhr = null;
                // TODO: indicate to user that browser is not supported
            }

            xhr.setRequestHeader("Content-type", self.photo.type);
            xhr.setRequestHeader("X-File-Name", self.photo.name);
            xhr.setRequestHeader("Accept","application/json");
            if (UserAPI.hasSessionUser()) {
                var authToken = UserAPI.getAuthToken();
                xhr.setRequestHeader("Authorization", "Bearer " + authToken);
            }
            xhr.addEventListener("load", function (ev) {
                if (self.onUploadComplete) {
                    self.onUploadComplete(xhr);
                }
            }, false);

            croppie.result({
                    type: 'blob',
                    size: 'viewport',
                    format: 'png',
                    quality: 1,
                    circle: false
                }).then(function(blob) {
                    payload = blob;
                    xhr.send(payload);
                });
        }
    }

    self.init();
};

ProfilePicAPI.refreshUserProfilePic = function(imageElement) {
    if (UserAPI.hasSessionUser()) {
        var userId = UserAPI.getSessionUserAsJSON().user_id;
        ProfilePicAPI.refreshProfilePic(userId, imageElement);
    }
};

ProfilePicAPI.refreshProfilePic = function(userId, imageElement) {
    ProfilePicAPI.refreshMultipleProfilePics(userId, [imageElement]);
};

ProfilePicAPI.refreshMultipleProfilePics = function(userId, imageElements) {
    var xhr = new XMLHttpRequest();
    var pic_url = ProfilePicAPI.baseURL+'/profilePic/'+userId;
    if ("withCredentials" in xhr) {
      // Check if the XMLHttpRequest object has a "withCredentials" property.
      // "withCredentials" only exists on XMLHTTPRequest2 objects.
      xhr.open("GET", pic_url);

    } else if (typeof XDomainRequest != "undefined") {
      // Otherwise, check if XDomainRequest.
      // XDomainRequest only exists in IE, and is IE's way of making CORS requests.
      xhr = new XDomainRequest();
      xhr.open("GET", pic_url);
    } else {
      // Otherwise, CORS is not supported by the browser.
      xhr = null;
      // TODO: indicate to user that browser is not supported
    }
    xhr.open('GET', pic_url);
    xhr.setRequestHeader("Accept","image/*");
    xhr.addEventListener('load', function() {
        if (xhr.status == 200) {
            for (var i=0; i<imageElements.length;i++) {
                imageElements[i].src = xhr.responseURL;
            }
        } else {
            for (var i=0; i<imageElements.length;i++) {
                imageElements[i].src = ProfilePicAPI.defaultProfilePic;
            }
        }
    });
    xhr.send();
};
