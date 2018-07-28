function openOB(evt, obName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(obName).style.display = "block";
    evt.currentTarget.className += " active";
}

/*jQuery time - for accordian*/
jQuery(document).ready(function(){
    jQuery("#OBaccordian h3").click(function(){
        //slide up all the link lists
        jQuery("#OBaccordian ul ul").slideUp();
        //slide down the link list below the h3 clicked - only if its closed
        if(!jQuery(this).next().is(":visible"))
        {
            jQuery(this).next().slideDown();
        }
    })
})