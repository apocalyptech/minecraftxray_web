function togglePrev()
{
    var element = document.getElementById('previous');
    var tostyle;
    if (element.style.display == 'inline')
    {
        tostyle = 'none';
    }
    else
    {
        tostyle = 'inline';
    }

    var image = document.getElementById('previoustoggle');
    if (tostyle == 'inline')
    {
        image.src = 'minus.png';
    }
    else
    {
        image.src = 'plus.png';
    }
    element.style.display = tostyle;
}

var imageswap_timeout = 7000;
var cur_img_idx = 0;
var images = new Array();

function initScreenshotCycle()
{
    var loaded = new Image();
    images[0] = 'xray_river_thumb.png';
    images[1] = 'xray_ores_and_slime_thumb.png';
    images[2] = 'xray_explored_thumb.png';
    images[3] = 'xray_nether_thumb.png';
    images[4] = 'xray_chasm_thumb.png';

    for (i=0; i<images.length; i++)
    {
        loaded.src = images[i];
    }
    setTimeout('cycleScreenshot()', imageswap_timeout);
}

function cycleScreenshot()
{
    var img = document.getElementById('screenshot');
    cur_img_idx = (cur_img_idx + 1) % images.length;
    img.src = images[cur_img_idx];
    setTimeout('cycleScreenshot()', imageswap_timeout);
}

// Make sure that we start cycling when the page loads
window.onload = initScreenshotCycle;
