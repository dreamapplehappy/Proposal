# 需求分析
+ 提出提议，并能讨论
+ 对每个提议能顶或踩直观显示
+ 及时通知 反馈

# database
## users
+ id
+ email
+ name
+ remember_token
+ topic_count
+ reply_count
+ timestamps

##topics
+ id
+ title
+ body
+ user_id
+ reply_count
+ vote_count
+ timestamp

##replies
+ id
+ body
+ topic_id
+ user_id
+ timestamp

#votes
+ id
+ user_id
+ topic_id
+ voted

#todo
+ 登入后跳转到前页面
+ markdown preview
+ delete confirm
+ 邮件通知
+ @功能
+ 改善投票功能
+ dashboard