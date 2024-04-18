const xhr = new XMLHttpRequest();
    xhr.open("POST", "event_date_calendar_controller.php", true);
    // & I don't have any clue how tf this path works but it works - @AdamrePL
    // * Actually on second thought, I think it's the path from the currently working/active page (page where the event/function/xhr was triggered/called - also in other words, from where the xhr was sent and NOT from script file location)
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
               let data = JSON.parse(xhr.responseText);
               console.log(data)
                for (const key in data) {
                    console.log(data[key])
                }
            }
        }
    }

    xhr.send(); 