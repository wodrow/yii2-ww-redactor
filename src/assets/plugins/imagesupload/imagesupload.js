if (!RedactorPlugins) var RedactorPlugins = {};

(function ($) {
    RedactorPlugins.imagesupload = function () {
        return {
            init: function () {
                var button = this.button.add('image', '多图上传');
                this.button.addCallback(button, this.clips.show);
            }
        };
    };
})(jQuery);