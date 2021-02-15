    let select1 = document.getElementById("brandsOne");
    var option = document.createElement("option");
    option.value = "";
    option.text = "";
    let select2 = document.getElementById("brandsMulti");
    for (var i = 0;
     i < brands.length;
     i++) {
        var option = document.createElement("option");
        option.value = brands[i];
        option.text = brands[i];

        if (targets.indexOf(brands[i]) > -1) {
        option.setAttribute('class', 'darkRed');
        }

        if (lokeds.indexOf(brands[i]) > -1) {
        option.setAttribute("disabled", "");
        }

        // if (i == 5) option.setAttribute("disabled", "");
        // if (i == 23) option.setAttribute("selected", true);
        // if (i >= 3 && i <= 7) option.setAttribute("selected", true);

        select2.appendChild(option);
    }

 
    let selectBox2 = null;

    function setEnable(id, isEnabled) {
        if (id == "brandsOne" && selectBox != null) {
            if (isEnabled) {
                selectBox.enable();
            } else {
                selectBox.disable();
            }

        } else if (id == "brandsMulti" && selectBox2 != null) {
            if (isEnabled) {
                selectBox2.enable();
            } else {
                selectBox2.disable();
            }
        }
    }
    function empty(id) {
        if (id == "brandsOne" && selectBox != null) {
            selectBox.empty();
            document.getElementById("Selects").value = "";

        } else if (id == "brandsMulti" && selectBox2 != null) {
            selectBox2.empty();
            document.getElementById("Selects").value = "";
        }
    }
    function doDestroy(id) {
        if (id == "brandsOne" && selectBox != null) {
            selectBox.destroy();
            let zone = document.getElementById("demo-single");
            buttons = zone.querySelector(".btns-active");
            buttons.style.display = "none";
            buttons = zone.querySelector(".btns-inactive");
            buttons.style.display = "block";


        } else if (id == "brandsMulti" && selectBox2 != null) {
            selectBox2.destroy();
            let zone = document.getElementById("demo-multiple");
            buttons = zone.querySelector(".btns-active");
            buttons.style.display = "none";
            buttons = zone.querySelector(".btns-inactive");
            buttons.style.display = "block";

        }
    }
    function init(id) {
if (id == "brandsMulti") {
        
            selectBox2 = new vanillaSelectBox("#brandsMulti", {"disableSelectAll": true, "maxHeight": 200, "search": true ,"translations": { "all": "All", "items": "items","selectAll":"Check All","clearAll":"Clear All"}});
            let zone = document.getElementById("demo-multiple");
            buttons = zone.querySelector(".btns-active");
            buttons.style.display = "block";
            buttons = zone.querySelector(".btns-inactive");
            buttons.style.display = "none";

        }
    }
    function setValues(id, value) {
        if (id == "brandsOne" && selectBox != null) {
            selectBox.setValue(value);
        } else if (id == "brandsMulti" && selectBox2 != null) {
            selectBox2.setValue(value);
        }
    }
    function getValues(id) {
        let result = [];
        let collection = document.querySelectorAll("#" + id + " option");
        collection.forEach(function (x) {
            if (x.selected) {
                result.push(x.value);
            }
        });
        return result;
    }

    function disableItems(id,value){
        if (id == "brandsOne" && selectBox != null) {
            selectBox.disableItems(value);
        } 
    }

    function enableItems(id,value){
        if (id == "brandsOne" && selectBox != null) {
            selectBox.enableItems(value);
        } 
    }

    init("brandsOne");
    init("brandsMulti");
	init("brandsMultiStay");
    // selectBoxTest = new vanillaSelectBox("#demoShort", {
    //     "maxHeight": 200, 
    //     "search": true ,
    //     "translations": { "all": "All", "items": "items","selectAll":"Check All","clearAll":"Clear All"}
    // });
	
let allCountries = [];
let timeTag = new Date().getTime();
// document.getElementById("ajaxDemoLink").setAttribute('href','ajaxDemo.html?v='+timeTag);
// let selectCountries = document.getElementById("allCountries");
// for (var i = 0;i < allCountries.length;i++) {
//     var option = document.createElement("option");
//     option.value = allCountries[i].code;
//     option.text = allCountries[i].name;
//     selectCountries.appendChild(option);
// }
// let selectBox4 = new vanillaSelectBox("#allCountries", { "maxHeight": 200, "search": true,"stayOpen":true,translations: { "all": "All", "items": "Countries" } });
// let selecDino = new vanillaSelectBox("#dino-select",{ "maxHeight": 200, translations: { "all": "All", "items": "Dinos" } });
        