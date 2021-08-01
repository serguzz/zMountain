

blogContainer = document.getElementById("blog_container");

    fetch("db-api/blogposts.php?page="+1)
      .then(function (resp) {return resp.json() })
        .then(function (data) {
            //console.log(data);
            //blogContainer.textContent = data[0].title;
              for (let blogItem of data) {
                let blog_html = '<div class="blogpost-container">'+
                				          '<div class="blogpost-header">' +
                				            '<div class="blogpost-cover" id="blogpost_' + blogItem['id'] + '_cover" >' +
                                      '<img src="template/images/blog/' + blogItem['image'] + '">' +
                          					'</div>' +
                          				'</div>' +
                          				'<div class="blogpost-body">' +
                          					'<div class="blogpost-title">' +
                          						'<h1><a href="blogpost/' + blogItem['id'] + '">' + blogItem['title'] + '</a></h1>' +
                          					'</div>' +
                                    '<div class="blogpost-author">' +
                                      '<p>by <a href="#">' + blogItem['author'] + '</a></p>' +
                                    '</div>' +
                          					'<div class="blogpost-text">' +
                          						'<p>' + blogItem['short_content'] + '</p>' +
                          					'</div>' +
                           					'<div class="blogpost-tags">' +
                          							'<li><a href="#">Lorem</a></li>' +
                          							'<li><a href="#">dfgfg</a></li>' +
                          							'<li><a href="#">nbnnn nnn</a></li>' +
                          							'<li><a href="#">dfgfg</a></li>' +
                          							'<li><a href="#">dfgfg</a></li>' +
                          					'</div>' +
                          				'</div>' +
                          				'<div class="blogpost-footer">' +
                          					'<ul><li class="published-date">4 days ago</li></ul>' +
                          				'</div></div> <!-- blogpost-container-->';

                $('#blog_container').append(blog_html);

                //let blogpostCover = document.getElementById("blogpost_" + blogItem['id'] + "_cover");
                //blogpostCover.style.background = 'url(images/blog/' + blogItem['image'] + ')';

              }
          })
        .catch((error) => {
              console.error('Error222:', error);
            });
