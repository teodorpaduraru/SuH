$(document).ready(function () {
    lastIndex = 0;
    $(document).keydown(function (e) {
        if (e.keyCode == 9) var thisTab = $(":focus").attr("tabindex");
        if (e.keyCode == 9) {
            if (e.shiftKey) {
                //Focus previous input
                if (thisTab == startIndex) {
                    $("." + tabLimitInID).find('[tabindex=' + lastIndex + ']').focus();
                    return false;
                }
            } else {
                if (thisTab == lastIndex) {
                    $("." + tabLimitInID).find('[tabindex=' + startIndex + ']').focus();
                    return false;
                }
            }
        }
    });
    var setTabindexLimit = function (x, fancyID) {
        console.log(x);
        startIndex = 1;
        lastIndex = x;
        tabLimitInID = fancyID;
        $("." + tabLimitInID).find('[tabindex=' + startIndex + ']').focus();
    }
    /*Taking last tabindex=10 */
    setTabindexLimit(10, "limitTablJolly");
});