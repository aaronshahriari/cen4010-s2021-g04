

function onLoad() {
    gapi.load('auth2', function () {
        gapi.auth2.init();
    });

    var auth2 = gapi.auth2.getAuthInstance();
    auth2.isSignedIn.listen((e) => {
        if (e) {
            // Write all google associated code in here
            console.log('Onload');
            var profile = auth2.currentUser.get().getBasicProfile();
            document.getElementById('name').innerHTML = profile.getName();
        }
    })
}

