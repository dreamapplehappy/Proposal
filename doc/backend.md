#Home页面
过期提议:$topics_pass
未过期提议:$topics_not_pass
通过 -> 获得属性
属性:
* id integer
* title string 
* body  text
* user_id integer
* reply_count integer
* vote_count integer
* created_at timestamp
* updated_at timestamp
* deadline datetime 0000-00-00 00:00:00
* importance integer

#profile页面
url: /user/{id}
name: user.show:
视图文件放在users/profile.blade.php
用户： $user
提议: $topics

