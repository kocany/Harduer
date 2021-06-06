<?php

echo  "
<h1>$data->brand</h1>
<h1>$data->model</h1>
<h1>$data->price</h1>
<p><img width='380px' src='$data->snimka'></p>
<form action='". APPLICATION_PATH . "index.php?controller=processors&action=update&prc_id=$data->prc_id' method='post'>
<button type='submit'>Update</button>
</form>



<h3>Comments:</h3>
<input type='text' id='message' placeholder='I like this movie because...'>
<button id='addComment'>Comment</button>

<script type='application/javascript'>

    async function postData(url, data){
        const response = await fetch(url,{
            method: 'POST',
            headers: {
                'Content-type': 'aplications/json'
            },
            body: JSON.stringify(data)
        });
        return response.json();
    }


    document.getElementById('addComment').onclick = async() => {
    let message = document.getElementById('message').value;

    await postData('http://localhost/ikt-second-year/api/Api.php',{
        token: '123abc',
        comment: message,
        user_id: ";

        if(!empty($_SESSION["uid"]))  echo $_SESSION["uid"];
        echo ",

        prc_id: " . $data->prc_id . "

    });

        document.getElementById('message').value = '';
    }

</script>

";
