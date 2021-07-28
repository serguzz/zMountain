fetch("json.php?option=2")
  .then(function (resp) {return resp.json() })
    .then(function (data) {
        console.log(data);

        alert("blogpost title: " + data.blogpost_title + "\n"
            + "blogpost text: " + data.blogpost_text +  "\n"
            + "blogpost option: " + data.data );

      })
    .catch((error) => {
          console.error('Error222:', error);
        });
