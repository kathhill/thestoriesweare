(function () {
    var VideoContainers = $(".video-container");
    SetVideoSourceBasedOnMaxDeviceWidth();
    VideoContainers.click(ToggleVideoPlayState);
    $("video")
        .on("playing", DimContentOverlay)
        .on("pause", BrightenContentOverlay);
    $(".iframe-video-modal")
        .on("hidden.bs.modal", UnloadVideo)
        .on("show.bs.modal", LoadVideo);
    function ToggleVideoPlayState(e) {
        var target = $(e.target);
        var videoContainer = target.closest(".video-container");
        var video = videoContainer.find("video")[0];
        if (target.is(".btn")) {
            return;
        }
        if (video.paused) {
            video.play();
        }
        else {
            video.pause();
        }
    }
    function DimContentOverlay() {
        $(this).closest(".video-container").addClass("video-playing");
    }
    function BrightenContentOverlay() {
        $(this).closest(".video-container").removeClass("video-playing");
    }
    function SetVideoSourceBasedOnMaxDeviceWidth() {
        var videoSourceElements;
        if (Modernizr.mq("(max-device-width: 767px)")) {
            videoSourceElements = $(".video-source-sm");
        }
        else if (Modernizr.mq("(max-device-width: 1024px)")) {
            videoSourceElements = $(".video-source-md");
        }
        else {
            videoSourceElements = $(".video-source-lg");
        }
        videoSourceElements.each(function (_i, elem) {
            var videoSourceElement = $(elem);
            videoSourceElement.attr("src", videoSourceElement.data("src"));
        });
        VideoContainers.each(function (_i, elem) {
            var video = $(elem).find("video")[0];
            video.load();
        });
    }
    function LoadVideo(e) {
        var videoModal = $(this);
        var triggerElem = $(e.relatedTarget);
        var videoId = triggerElem.data("video-id");
        var src = "//www.youtube.com/embed/" + videoId + "?rel=0&html5=1&autoplay=1&enablejsapi=1";
        var modalTitle = triggerElem.data("modal-title");
        videoModal.find(".modal-title").text(modalTitle);
        videoModal.find("iframe").attr("src", src);
    }
    function UnloadVideo() {
        $(this).find("iframe").attr("src", "");
    }
})();