function MobileTopBar_init() {
    $('.mobile-top-bar__btn-toggle-side-bar').click(function () {
        let $this = $(this);

        if ($this.hasClass('active')) {
            $this.removeClass('active');
            $('.mobile-side-bar').removeClass('active');
        } else {
            $this.addClass('active');
            $('.mobile-side-bar').addClass('active');
        }
    });
}

MobileTopBar_init();