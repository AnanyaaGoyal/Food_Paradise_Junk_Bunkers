create database food_paradise;
use food_paradise;
create table admin(admin_id int primary key, admin_email varchar(255), admin_password varchar(255), admin_date varchar(255));
show tables;
describe admin;
insert into admin values("1", "ananyagoyal128@gmail.com", "admin", "2021-11-09 13:51:59");
select * from admin;
create table user_info(user_id int primary key, name varchar(256), email_address varchar(256), username varchar(256), password varchar(256), gender varchar(256), profile varchar(256));
drop table user_info;
create table user_info(user_id int primary key auto_increment, name varchar(256), email_address varchar(256), username varchar(256) unique, password varchar(256), gender varchar(256));
describe user_info;
select * from user_info;
insert into user_info values("1", "Ananya", "ananyagoyal128@gmail.com", "ann.cooks", "123", "Female");
create table post(post_id int primary key auto_increment, recipe_name varchar(256), recipe varchar(2000), image varchar(256));
describe post;
select * from post;
delete from post where recipe_name="bean salad";
drop table post;
create table post(post_id int primary key auto_increment, recipe_name varchar(256), recipe varchar(2000), image varchar(256), chef varchar(256));
create table likes(post_id int not null, likes int, FOREIGN KEY (post_id) REFERENCES post(post_id));
describe likes;
select * from likes;
insert into likes values("1", "1");
insert into likes values("2", "2");
insert into likes values("3", "3");
insert into likes values("4", "4");
create table communities(community_id int primary key auto_increment, community_name varchar(256) unique, star_ingredient varchar(256) unique, creator varchar(256), description varchar(400), foreign key(creator) references user_info(username));
describe communities;
insert into communities values("1", "choco-flow", "chocolate", "ann.cooks", "Find everything overflowing with chocolate");
select * from communities;
delete from communities where community_id="2";
describe coffilicious;
select * from coffilicious;
insert into coffilicious values("1", "Fudge Brownie Mudslide Ice Cream Cake", "1.	Preheat your KitchenAid® Double Oven Convection Range to 350ºF. Meanwhile, line the Half Sheet Pan from your KitchenAid® Quarter Sheet and Half Sheet Pans Set, with parchment paper and lightly butter.
2.	To make the brownie, begin by gently melting chocolate until smooth in a double boiler or in the microwave on low power. Set aside to cool slightly.
3.	In the bowl of your KitchenAid® Stand Mixer fitted with the flat beater, beat the butter and sugar on medium-high speed (4 or 6) for 2-3 minutes, or until light and fluffy. Add the eggs, one at a time, beating well after each addition. Increase the speed to high (8 or 10) and beat for another 2-3 minutes, or until fluffy. Then, mix in the vanilla.",
"coffee-cake.webp", "ak");
insert into coffilicious values ("2", "Raw Espresso Doughnuts", "To Make the Doughnuts:
1.	Line a cookie sheet with parchment paper.
2.	Add all the ingredients for the doughnuts in a food processor and process until the mixture looks fine and crumbly, but sticks together when pressed (about 2 minutes).
3.	On a clean surface, roll 1/4 cup of the mixture to make a long enough cylinder, then stick together the ends to make a round doughnut shape. The doughnuts will be a little oily from processing the pecans, that’s normal. Make 8-10 doughnuts.
4.	Place on the cookie sheet. Chill in the freezer while you make the glaze." , "raw_espresso_doughnuts.webp", "ann.cooks");
update post set recipe="When using canned beans, drain them and rinse under cold water before tossing with the other salad ingredients. The liquid in the can can taste a bit salty and since it has starch from the beans, it can make the salad’s dressing look murky.
Add fresh herbs to the salad. I love fresh parsley and add a lot. Other herbs will work, too. Try basil, mint, tarragon, dill and cilantro. When adding tarragon, add to taste since it is a bit more pungent than other fine herbs.
Add some crunch to balance the texture of the beans. We add cucumber, but celery, fennel, jicama and bell peppers are all excellent crunchy veggies to add.
Chill the salad in the refrigerator for at least an hour before serving to allow the beans to marinate in the dressing.
Store the salad in the refrigerator up to 4 days (maybe longer)." where post_id="1";
select * from post;
update post set recipe="1)Add the blueberries, banana, orange and 3/4 cup of the milk to a blender. If you plan to add any, add optional ingredients to the blender.
2)Turn blender on and blend until creamy and smooth. If the smoothie is too thick, add a bit more milk." where post_id="2";
update post set recipe="Cut your broccoli small. Because the broccoli stays raw for this dish, you want to make sure the pieces are small enough to become fully coated and soften in the dressing. Also, when the broccoli pieces are a similar size to the other ingredients in the salad, you can get a little of everything in each bite.
Let it marinate. This salad is good right after it’s made, but it’s even better after a few hours (or even days) in the fridge. The broccoli softens and absorbs the flavors of the dressing – my family  loved it on day three!
Save some nuts for the last minute. Sure, I like to make this salad ahead so that the flavors can develop, but the key to making it great is the super crispy, smoky nuts & seeds on top. If you add them too early, they’ll lose their crunch, so save some to sprinkle on right before serving!" where post_id="3";


