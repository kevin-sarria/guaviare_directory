((() => {

    // variables
    const pathName = window.location.pathname;
    const links = document.querySelectorAll('.link-sidebar');
    const sideBar = document.querySelector('.sidebar');
    const contentDashboard = document.querySelector('.content__dashboard');

    const widthSidebar = 240;

    contentDashboard.style.marginLeft = `${widthSidebar}px`;
    sideBar.style.marginLeft = 0;

    // Fucntions or Actions to execute
    links.forEach( link => link.attributes.href.value === pathName ? link.classList.add('active') : '' );

    window.addEventListener("resize", calcWidthScreen)

    function calcWidthScreen() {
        const widthScreen = window.innerWidth;

        if( widthScreen < 768 ) {
            sideBar.classList.remove('sidebar-active');
            sideBar.classList.add('sidebar-hidden');
            toggleSidebar(widthScreen);
        } else {
            sideBar.classList.remove('sidebar-hidden');
            sideBar.classList.add('sidebar-active');            
            toggleSidebar(widthScreen);
        }
    }

    function toggleSidebar(widthScreen = 0) {

        if( widthScreen < 768 ) {
            contentDashboard.style.marginLeft = 0;
            sideBar.style.marginLeft = `-${widthSidebar}px`;
        } else {
            contentDashboard.style.marginLeft = `${widthSidebar}px`;
            sideBar.style.marginLeft = 0;
        }


    }

}))();