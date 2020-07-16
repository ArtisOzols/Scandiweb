"use strict";
let form = document.getElementsByTagName("form");
let size = document.getElementById("size");
let weight = document.getElementById("weight");
let dimentions = document.getElementById("dimentions");
let specAttribute = document.getElementById("specAttribute");

// expands form, adds size text field and requires user to fill them, deletes unnecessary information from other special attribute fields
function AddSize(){
    specAttribute.style.cssText = "height: 85px;";
    
    weight.style.cssText = "height:0; opacity:0;";
    dimentions.style.cssText = "height:0; opacity:0;";
    size.style.cssText = "height: 85px; width:100%; opacity:1; overflow: visible;";  
    size.getElementsByTagName("input")[0].required = true;   

    weight.getElementsByTagName("input")[0].required = false;   
    weight.getElementsByTagName("input")[0].value= "";   
    for (let i=0; i<3; i++) {
        dimentions.getElementsByTagName("input")[i].required = false;   
        dimentions.getElementsByTagName("input")[i].value= "";     
    }
}

// expands form, adds weight text field and requires user to fill them, deletes unnecessary information from other special attribute fields
function AddWeight(){
    specAttribute.style.cssText = "height: 85px;";

    size.style.cssText = "height:0; opacity:0;";
    dimentions.style.cssText = "height:0; opacity:0;";
    weight.style.cssText = "height: 85px; width:100%; opacity:1; overflow: visible;";
    weight.getElementsByTagName("input")[0].required = true;   
    
    size.getElementsByTagName("input")[0].required = false;   
    size.getElementsByTagName("input")[0].value= "";      
    for (let i=0; i<3; i++) {
        dimentions.getElementsByTagName("input")[i].required = false;   
        dimentions.getElementsByTagName("input")[i].value= "";      
    }
}

// expands form, adds dimentions text fields and requires user to fill them, deletes unnecessary information from other special attribute fields
function AddDimentions(){
    specAttribute.style.cssText = "height: 255px;";

    size.style.cssText = "height:0; opacity:0;";
    weight.style.cssText = "height:0; opacity:0;";
    dimentions.style.cssText = "height: 255px; width:100%; opacity:1; overflow: visible;";
    for (let i=0; i<3; i++) {
        dimentions.getElementsByTagName("input")[i].required = true;   
    }

    size.getElementsByTagName("input")[0].required = false;   
    size.getElementsByTagName("input")[0].value= "";      
    weight.getElementsByTagName("input")[0].required = false;   
    weight.getElementsByTagName("input")[0].value= "";      
}

