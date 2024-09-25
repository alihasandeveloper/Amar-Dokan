jQuery(document).ready(function ($) {
    $('#header-menu').meanmenu({
        meanScreenWidth: "768", // Specify the width when MeanMenu activates
        meanMenuContainer: '#meanmenu', // Container for MeanMenu to attach
        meanRevealPosition: 'right', // Menu reveal position
        meanShowChildren: true, // Show dropdown children
    });
});