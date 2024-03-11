function val()
        {
          var x=document.forms["myForm"]["minQ"].value;
          var y=document.forms["myForm"]["maxQ"].value;
          var z=document.forms["myForm"]["minP"].value;
          var w=document.forms["myForm"]["maxP"].value;
          
          console.log("came here\n");
          
          if(x){
              if(x<0){
                alert("Minimum Quantity can't be less than zero(0).");
                return false;
              }
              else if(x>Number.MAX_SAFE_INTEGER){
                alert("Minimum Quantity entered is too big. ");
                return false;
              }
              if(y){
                  if (y<0){
                    alert("Maximum Quantity can't be less than zero(0). ");
                    return false;
                  }
                  else if(y>Number.MAX_SAFE_INTEGER){
                    alert("Maximum Quantity entered is too big. ");
                    return false;
                  }
                  if(x>y){
                    alert("Minimum Quantity can't be greater than Maximum Quantity.");
                    return false;
                  }
              }
          }
          
          
        if(z){
              if(z<0){
                alert("Minimum Price can't be less than zero(0).");
                return false;
              }
              else if(z>Number.MAX_SAFE_INTEGER){
                alert("Minimum Price entered is too big. ");
                return false;
              }
              if(w){
                  if (w<0){
                    alert("Maximum Price can't be less than zero(0). ");
                    return false;
                  }
                  else if(w>Number.MAX_SAFE_INTEGER){
                    alert("Maximum Price entered is too big. ");
                    return false;
                  }
                  if(z>w){
                    alert("Minimum Price can't be greater than Maximum Price.");
                    return false;
                  }
              }
          }
                    return true;
        }
