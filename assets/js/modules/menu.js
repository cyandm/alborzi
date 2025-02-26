function desktopMenu() {
    const desktopMenuOpener = document.querySelector('#desktopMenuOpener')
    const desktopMenu = document.querySelector('#desktopMenu')
    const desktopMenuCloser = document.querySelector('#desktopMenuCloser')

    if (!desktopMenuOpener || !desktopMenu || !desktopMenuCloser) return

    desktopMenuOpener.addEventListener('click', () => {

        //add class to desktopMenu
        desktopMenu.classList.replace('[clip-path:polygon(0_0,_100%_0_,_100%_0_,_0_0)]', '[clip-path:polygon(0_0,_100%_0_,_100%_100%_,_0_100%)]');

    })

    desktopMenuCloser.addEventListener('click', () => {

        //add class to desktopMenu
        desktopMenu.classList.replace('[clip-path:polygon(0_0,_100%_0_,_100%_100%_,_0_100%)]', '[clip-path:polygon(0_0,_100%_0_,_100%_0_,_0_0)]')
    })
}

desktopMenu();

function mobileMenu() {
    const mobileMenuOpener = document.querySelector('#mobileMenuOpener');
    const mobileMenu = document.querySelector('#mobileMenu');
    const mobileMenuCloser = document.querySelector('#mobileMenuCloser');

    if (!mobileMenuOpener || !mobileMenu || !mobileMenuCloser) return;

    // Open Mobile Menu
    mobileMenuOpener.addEventListener('click', () => {
        mobileMenu.classList.replace(
            '[clip-path:polygon(0_0,_100%_0_,_100%_0_,_0_0)]',
            '[clip-path:polygon(0_0,_100%_0_,_100%_100%_,_0_100%)]'
        );
    });

    // Close Mobile Menu
    mobileMenuCloser.addEventListener('click', () => {
        mobileMenu.classList.replace(
            '[clip-path:polygon(0_0,_100%_0_,_100%_100%_,_0_100%)]',
            '[clip-path:polygon(0_0,_100%_0_,_100%_0_,_0_0)]'
        );
    });

    // Handle submenu toggling
    const menuItems = document.querySelectorAll(".menu-item");

    menuItems.forEach((item) => {
        const link = item.querySelector(".menu-link");
        const submenu = item.querySelector(".submenu");
        const icon = item.querySelector(".menu-icon");

        if (submenu) {
            link.addEventListener("click", function (event) {
                event.preventDefault(); // Prevent navigation if clicking to open submenu

                // Check if submenu is currently open
                const isOpen = submenu.style.maxHeight && submenu.style.maxHeight !== "0px";

                // Close all submenus before toggling the clicked one
                document.querySelectorAll(".submenu").forEach((sub) => {
                    sub.style.maxHeight = "0px";
                });

                document.querySelectorAll(".menu-icon").forEach((ico) => {
                    ico.classList.remove("-rotate-90");
                });

                // Toggle the clicked submenu
                if (!isOpen) {
                    submenu.style.maxHeight = submenu.scrollHeight + "px";
                    icon.classList.add("-rotate-90");
                } else {
                    submenu.style.maxHeight = "0px";
                    icon.classList.remove("-rotate-90");
                }
            });
        }
    });
}

mobileMenu();


function desktopHoverMenu() {
    const parent = document.querySelector('.parent');
    const menuItemsHasChild = document.querySelectorAll('.menu-item.has-child');
    const childMenuItems = document.querySelectorAll('.child-menu-item');

    if (!menuItemsHasChild || !childMenuItems) return;

    let activeMenu = null; // Track currently active menu item

    menuItemsHasChild.forEach((menuItem) => {
        const menuItemID = menuItem.dataset.id;

        menuItem.addEventListener('mouseenter', () => {
            clearTimeout(parent.hideTimeout); // Prevent unwanted hiding

            parent.classList.replace('hidden', 'block');
            parent.classList.replace('w-0', 'w-auto');

            // Hide all submenus first
            childMenuItems.forEach((childItem) => {
                childItem.style.clipPath = 'polygon(100% 0%, 100% 0%, 100% 100%, 100% 100%)';
                childItem.style.opacity = '0';
                childItem.style.pointerEvents = 'none';
            });

            // Show only the submenu of the hovered item
            const activeChild = document.querySelector(`.child-menu-item[data-id="${menuItemID}"]`);
            if (activeChild) {
                activeChild.style.clipPath = 'polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)';
                activeChild.style.opacity = '1';
                activeChild.style.pointerEvents = 'auto';
            }

            activeMenu = menuItem; // Track current active item
        });

        menuItem.addEventListener('mouseleave', () => {
            setTimeout(() => {
                if (!menuItem.matches(':hover') && !parent.matches(':hover')) {
                    hideSubmenu();
                }
            }, 100);
        });
    });

    parent.addEventListener('mouseleave', () => {
        parent.hideTimeout = setTimeout(() => {
            hideSubmenu();
        }, 200);
    });

    function hideSubmenu() {
        if (![...menuItemsHasChild].some(item => item.matches(':hover'))) {
            parent.classList.replace('block', 'hidden');
        }
    }
}

desktopHoverMenu();