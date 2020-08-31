select u.name, count(p.post_id) as posts
from user u
inner join post p ON u.user_id = p.user_id
group by u.user_id
order by posts desc
limit 10;