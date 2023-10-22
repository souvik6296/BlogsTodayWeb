let emailid= localStorage["email"];
let var3= false;

if(emailid!=null){
                    
    

    function myfunction(){
        if(!var3){
            let var1= document.getElementById("getmail");
            let var2= document.getElementById("collected-btn");
            if(var1!=null && var2!=null){
                var3= true;
                var1.value= emailid;
                localStorage.clear();
                var2.click();
            }
        }
        
    }
    myvar= setTimeout(myfunction(), 3000);



                    
}
else{
    console.log("no mail id found");
}