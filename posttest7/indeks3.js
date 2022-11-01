alert("Nonton Yuk!!!")
alert("Kalian tentu bisa bebas pilih filmnya")
alert("Tapi, jangan lupa waktu yaa!!")

var baru = document.getElementById('baru')
baru.addEventListener("mouseenter", function(){
    baru.style.color = "black"
})
baru.addEventListener("mouseleave", function(){
    baru.style.color = ['#5290c9']
})
var glow = document.getElementById('glow')
glow.addEventListener("mouseenter", function(){
    glow.style.color = "black"
})
glow.addEventListener("mouseleave", function(){
    glow.style.color = "white"
})
