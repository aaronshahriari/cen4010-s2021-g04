$(function () {
    const navTemplate = document.getElementById("nav-template");
    const navCopy = document.getElementsByClassName("nav-copy");
    // console.log($("#nav-template").load("index.html").html());
    $(navCopy).load("navbar.html", () => {
        const navLinks = document.querySelectorAll('.nav-links li');
        for (let element of navLinks) {
            if (element.firstChild.href == window.location.href) {
                element.classList.add('active');
                break;
            }
        }
    });

});

