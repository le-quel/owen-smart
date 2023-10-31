function check(){
    var name = document.getElementById("name")
    var pass = document.getElementById("password")
    var sdt= document.getElementById("phone")
    var email = document.getElementById("email")
    if(name.value == ""){
        alert("Vui lòng không để trống trường này!")
        password.focus()
        return false
    }else if (pass.value ==""){
        alert("Vui lòng không để trống trường này!")
        pass.focus()
        return false
    }else if (sdt.value ==""){
        alert("Vui lòng không để trống trường này!")
        sdt.focus()
        return false
    }else if (email.value ==""){
        alert("Vui lòng không để trống trường này!")
        email.focus()
        return false
    }
    return true
}