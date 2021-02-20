var btn = document.getElementById("main-btn");

btn.addEventListener("mouseover", function (e) {
  var nav = document.getElementById("main-nav");
  var sub_btns = document.getElementsByClassName("sub-btn");
  var pos = [];
  e.className += "main-hover";
  console.log(e)
  nav.addEventListener("mouseover", function (e) {
      var total =0;
      for(var x = 0;x<sub_btns.length;x++) {
        if(x <5) {
          sub_btns[x].style.left = "-"+((x+1)*30)+"%";
          pos[x] = ((x+1)*20);
        } else {
           sub_btns[x].style.right = "-"+((x-1-1-1-1)*35)+"%";
           pos[x] = ((x-1)*280);
        }
        sub_btns[x].style.opacity = "1";
      }
      nav.style.width = 50+"%";

  });
  
  nav.addEventListener("mouseout", function(){
    nav.style.width = "100px";

    for(var x = 0;x<sub_btns.length;x++) {
      sub_btns[x].style.left = "0";
      sub_btns[x].style.right = "0";
      sub_btns[x].style.opacity = "0";
    }
  })
});





function gl()
{
location.href='index.php';
}



function BlogGood()
{
location.href='index.php?page=1';
}



function Blog()
{
location.href='index.php?page=2';
}



function Good()
{
location.href='index.php?page=3';
}



function BG()
{
location.href='index.php?page=4';
}



function BlGo()
{
location.href='index.php?page=5';
}



function BloGoo()
{
location.href='index.php?page=6';
}



function BGood()
{
location.href='index.php?page=7';
}



function BlGood()
{
location.href='index.php?page=8';
}



function BloGood()
{
location.href='index.php?page=12';
}

function shar()
{
location.href='index.php?page=9';
}


