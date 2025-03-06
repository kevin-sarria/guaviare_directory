((() => {

    // variables
    const pathName = window.location.pathname;
    const links = document.querySelectorAll('.link-sidebar');
    const sideBar = document.querySelector('.sidebar');
    const contentDashboard = document.querySelector('.content__dashboard');
    const btnMenuDashboard = document.querySelector('#btn_menu_dashboard');
    const btnCloseSidebar = document.querySelector('#btn_close_sidebar');

    let widthSidebar = 240;
    let isOpenSidebar = true;

    // Actions to execute
    links.forEach( link => link.attributes.href.value === pathName ? link.classList.add('active') : '' );

    window.addEventListener("resize", calcWidthScreen)
    window.addEventListener("DOMContentLoaded", () => {
        if( window.innerWidth < 1024 ) {
            contentDashboard.style.marginLeft = 0;
            sideBar.style.marginLeft = `-${widthSidebar}px`;
            
        } else {
            contentDashboard.style.marginLeft = `${widthSidebar}px`;
            sideBar.style.marginLeft = 0;
        }
    })
    btnMenuDashboard.addEventListener("click", toggleIsOpenSidebar);
    btnCloseSidebar.addEventListener("click", toggleIsOpenSidebar);


    // Functions
    function calcWidthScreen() {
        const widthScreen = window.innerWidth;

        if( widthScreen <= 768 ) {
            toggleSidebar(widthScreen);
            isOpenSidebar = false;
        } else {
            toggleSidebar(widthScreen);
        }
    }

    function toggleIsOpenSidebar() {
        const widthScreen = window.innerWidth;

        isOpenSidebar = !isOpenSidebar;
        toggleSidebar(widthScreen);
    }

    function toggleSidebar(widthScreen = 0) {

        if( widthScreen <= 768 && !isOpenSidebar ) {
            contentDashboard.style.marginLeft = 0;
            sideBar.style.marginLeft = `-${widthSidebar}px`;
        } else if(widthScreen <= 768 && isOpenSidebar) {
            contentDashboard.style.marginLeft = `${widthSidebar}px`;
            sideBar.style.marginLeft = 0;
        } else if( widthScreen > 768 && isOpenSidebar ) {
            contentDashboard.style.marginLeft = `${widthSidebar}px`;
            sideBar.style.marginLeft = 0;
        } else if( widthScreen > 768 && !isOpenSidebar ) {
            contentDashboard.style.marginLeft = 0;
            sideBar.style.marginLeft = `-${widthSidebar}px`;
        }

    }

}))();