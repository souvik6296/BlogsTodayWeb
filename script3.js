
function clickontextare(elementid){
    var text_area= document.getElementById(elementid);
    text_area.focus();
}



function changeheight(element){
    // let text_area= document.getElementById("blog-title");
    var h= 0;
    if(h!=document.getElementById(element).scrollHeight){
        if(element=="blog-body"){
            document.getElementById(element).style.minHeight= "90px"
        }
        document.getElementById(element).style.height= document.getElementById(element).scrollHeight+"px";
        
        h= document.getElementById(element).scrollHeight;
    }
    var word_entered= document.getElementById(element).value.length;
    var element0= document.getElementById(element);
    var parent_element= document.getElementById(element0.parentElement.id);
    var p_element= parent_element.children[1];
    if(element=="blog-title"){
        p_element.innerHTML=word_entered+"/30";
        if(word_entered==0||word_entered>40){
            p_element.style.color= "rgb(245, 9, 9)";
        }
        else{
            p_element.style.color= "rgb(16, 220, 16)";
        }
    }
    if(element=="blog-body"){
        p_element.innerHTML=word_entered+"/6000";
        if(word_entered==0||word_entered>6000||word_entered<1500){
            p_element.style.color= "rgb(245, 9, 9)";
        }
        else{
            p_element.style.color= "rgb(16, 220, 16)"; 
        }
    }
}


function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
  
      reader.onload = function (e) {

        
        document.getElementById(input.id).style.visibility= "hidden";
        document.getElementById(input.id).style.zIndex=0;
        document.getElementById("image").style.visibility= "visible";
        document.getElementById("image").style.zIndex=1;
        document.getElementById("image").src= e.target.result;

      };
  
      reader.readAsDataURL(input.files[0]);
    }
  }

function getselected(element){
    var index= element.selectedIndex;
    var inputText = element.children[index].value;
    console.log(inputText);
    console.log(element.innerText);
    if(inputText=="select"){
        document.getElementById("category").style.borderColor= "rgb(245, 9, 9)";
        element.children[0].innerText= "*this field is mandatory*";
    }
    else{
        document.getElementById("category").style.borderColor= "rgb(16, 220, 16)";
        element.children[0].innerText= "Selet a category";
    }

}

// var divelement= document.createElement('div');
// divelement.className= 'upperblock-container flex-display';
// document.getElementById('container1').appendChild(divelement);

// var divelement1= document.createElement('div');
// divelement1.className= 'inner-container first-block upper-block';

// var lastelement= document.getElementById('container1').lastChild;

// lastelement.appendChild(divelement1);

// divelement1style.backgroundImage= 'url()';

// //////////////////////////////////////////////////////////

// var parentelement= document.createElement('div');
// parentelement.className= 'backgroundimg';
// divelement1.appendChild(parentelement);

// var lastdiv= document.createElement('div');
// lastdiv.className= 'blog-details';
// parentelement.appendChild(lastdiv);

// var titleheading= document.createElement('h1');
// titleheading.className= 'title';
// titleheading.innerText='';
// lastdiv.appendChild(titleheading);

// var description= document.createElement('p');
// description.className= 'description';
// description.innerText='';
// lastdiv.appendChild(description);

// var readmore= document.createElement('p');
// readmore.className= 'read-more';
// readmore.innerText='Read more';
// readmore.onclick=saveDataofClickedPost(this);
// lastdiv.appendChild(readmore);


// //////////////////////////////////////////////////////////////

// var hiddenpost= document.createElement('a');
// hiddenpost.className= 'hidden';
// hiddenpost.innerText='';
// hiddenpost.href= 'readpost.html';
// lastdiv.appendChild(hiddenpost);




// var postid = document.getElementById(this.parentElement.id).children[3].innerText;
// localStorage['slectedpostid']= postid;
// document.getElementById(this.parentElement.id).children[3].click();

// document.getElementsByClassName('read-more').onClick= saveDataofClickedPost(this);
// var postid = element.parentElement.children[3].innerHTML;


