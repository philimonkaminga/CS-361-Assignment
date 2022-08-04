
// ::::::::::::::::::::::NAVIGATION::::::::::::::::::::::
var chevronDown=document.getElementById("btn-down");
var chevronUp=document.getElementById("btn-up");
var banner=document.getElementById("banner");
var iconBtn=document.getElementById("icon-btn");
var bannerImage=document.getElementById("bannerImage");


    //method to apply logic to the banner container
    function show(){
        if(banner.style.height="0"){
        chevronDown.style.display="none";
        chevronUp.style.display="block";
        banner.style.height="130px";
        bannerImage.style.display="flex";
        }
    }//end of show method

    function hide(){
        if(banner.style.height="130px"){
            chevronDown.style.display="block";
            chevronUp.style.display="none";
            banner.style.height="0";
            bannerImage.style.display="none";
        }
            

    }//end of hide method

    //on scroll show banner method
    function showBanner(){
        banner.style.height="140px";
    }


//Method to return an element by Id
function idCollector(id){
    return document.getElementById(id);

}

// ::::::::::::::::::::::NAVIGATION::::::::::::::::::::::


