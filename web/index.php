
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>from builder</title>
  </head>
  <body>
    <div id="home" class="container mt-5">
      <div class="row">
        <h3>Hello Form build</h3>
        <div class="col-lg-6">
        <h3>Form Name</h3>
          <div id="formFields">
          <!-- form fileds -->
           <form action="formGenerate.php" method="POST" >
               <input type="text" name="formname"></input>
               </br>
               <div id="nameOfFormFiled">

               </div>
                
               <button class="btn-info m-5" type="submit">Generate</button>
           </form>
          <div>
        </div>
    </div>
     </div>
     <div class="col-lg-6">
            <button class="btn-primary" onclick=`${addFormFiledName('text')}`>Text</button>
            <button class="btn-primary" onclick=`${addFormFiledName('number')}`>Number</button>
            <button class="btn-primary"onclick=`${addFormFiledName('date')}` >Date</button>
            <button class="btn-primary"onclick=`${addFormFiledName('textarea')}` >TextArea</button>
        </div>
     
      </div>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script> 
  
  
  </body>
  <script>
      const  arr=[];
      const addFormFiledName=(type)=>{
          formDiv=document.getElementById("nameOfFormFiled")
          const inp = document.createElement("input");
          inp.setAttribute("type","text")
          inp.setAttribute("name",type)
          switch(type){
              case "text":
                  para = document.createElement("p");
                  node = document.createTextNode("Text");
                  para.appendChild(node);
                  formDiv.appendChild( para );
                  
                  formDiv.appendChild(inp);
                   addFormField(type);
             break;
             case "number":
                  para = document.createElement("p");
                  node = document.createTextNode("Number");
                  para.appendChild(node);
                   formDiv.appendChild( para );
                  formDiv.appendChild(inp);
                   addFormField(type);
             break;
             case "date":
                  para = document.createElement("p");
                  node = document.createTextNode("Date");
                  para.appendChild(node);
                   formDiv.appendChild( para );
                  formDiv.appendChild(inp);
                   addFormField(type);
             break;
             case "textarea":
                  para = document.createElement("p");
                  node = document.createTextNode("textarea");
                  para.appendChild(node);
                  formDiv.appendChild( para );
                  const textarea=document.createElement("input");
                  formDiv.appendChild(inp);
                  addFormField(type);
             break;


          }
          

      }
      const addFormField=(type)=>{
          arr.push(type)
          console.log(arr)
      }
      const fetchApi=(arr)=>{
        fetch('generateform.php')
        .then(response => response.json())
        .then(data => console.log(data));
      }
  </script>
</html>