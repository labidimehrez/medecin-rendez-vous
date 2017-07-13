/**
 * @author Mehrez Labidi <contact.mehrezlabidi@gmail.com> 20-05-2017
 */


$(document).ready(function () {
    $("form label.required").append("<span style='font-weight: bold;color:red;float: right;'> * </span>");
});


//
//$(document).ready(function() {
//    /// active li and ul selon url current
//    var pathname = window.location.pathname; // Returns path only
//    $("ul.sidebar-menu>li").removeClass('active');
//    if (pathname.indexOf("mode-paiment")!==-1) {
//        $("ul.sidebar-menu>li.treeview").eq(0).addClass('active');
//    }
//
//    else if (pathname.indexOf("specialite")!==-1) {
//        $("ul.sidebar-menu>li.treeview").eq(1).addClass('active');
//    }
//
//    else if (pathname.indexOf("medecin")!==-1) {
//        $("ul.sidebar-menu>li.treeview").eq(2).addClass('active');
//    }
//
//});