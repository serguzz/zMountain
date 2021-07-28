

blogContainer = document.getElementById("blog_container");
// функция смены страницы
function pageChange(page) {
    var page_show = 0;
    var page_txt = '';
    var setting = page_setting();
    setting.page_left = page - setting.show; // находим левую границу
    setting.page_right = page + setting.show; // находим правую границу
    setting.page_prev = page - 1; // узнаем номер предыдушей страницы
    setting.page_next = page + 1; // узнаем номер следующей страницы
    if(setting.page_left < 2) setting.page_left = 2; // левая граница не может быть меньше 2, так как 2 - первое целое число после 1
    if(setting.page_right > (setting.page_count - 1)) setting.page_right = setting.page_count - 1; // правая граница не может ровняться или быть больше, чем всего страниц
    if(page > 1) setting.prev_show = 1; // если текущая страница не первая, значит существует предыдущая
    if(page != 1) setting.first_show = 1; // показываем ссылку на первую страницу, если мы не на ней
    if(page < setting.page_count) setting.next_show = 1; // если текущая страница не последняя, значит существуюет следующая
    if(page != setting.page_count) setting.last_show = 1;

    page_txt += pagePrint(setting.page_prev, setting.prev_text, setting.prev_show);
    page_txt += pagePrint(1, 1, setting.first_show, setting.class_active);
    if(setting.page_left > 2) page_txt += setting.separator;
    for(var i = setting.page_left; i <= setting.page_right; i++) {
        page_show = 1;
        if(page == i) page_show = 0;
        page_txt += pagePrint(i, i, page_show, setting.class_active);
    }
    if(setting.page_right < (setting.page_count - 1)) page_txt += setting.separator;
    if(setting.page_count != 1) page_txt += pagePrint(setting.page_count, setting.page_count, setting.last_show, setting.class_active);
    page_txt += pagePrint(setting.page_next, setting.next_text, setting.next_show);
    document.getElementById("pagination").innerHTML = page_txt;

    fetch("db/blogposts.php?page="+1)
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

    return false;
}

// функция для публикации ссылки на страницу
function pagePrint(page, title, show, active_class = '') {
    if(show) {
        return '<a href="javascript:return false;" onclick="pageChange(' + page + ')">' + title + '</a>';
    } else {
        var active = '';
        if(active_class != '') active = 'class="' + active_class + '"';
        return '<span ' + active + '>' + title + '</span>';
    }
    return false;
}

let page = 1; // получаем номер страницы, для примера 1
if(page != undefined) page = 1; // если страница не задана, показываем первую
let page_count = 2; // считаем кол-во страниц, для примера 10


// начальные настройки
let page_setting = function() {
    return {
        'limit': 5, // кол-во записей на странице
        'show': 2, // 5 до текущей и после
        'prev_show': 0, // не показывать кнопку "предыдущая"
        'next_show': 0, // не показывать кнопку "следующая"
        'first_show': 0, // не показывать ссылку на первую страницу
        'last_show': 0, // не показывать ссылку на последнюю страницу
        'prev_text': 'назад',
        'next_text': 'вперед',
        'class_active': 'active',
        'separator': ' ... ',
        'page_count': page_count,
        'page_left': 0,
        'page_right': 0,
        'page_prev': 0,
        'page_next': 0
    }
};

pageChange(1); // совершаем первый вызов



pagination = document.getElementById("pagination");
