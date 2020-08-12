SET SQL_SAFE_UPDATES=0;
use Meetain;
use meetainDataIn;
use meetainTest;
-- insert into member (mem_id,mem_name,mem_acc,mem_psw,mem_mail ) value ('歐文','黃建泓','owenthestar','love1234','owen0919335293dl4ul@gmail.com');
	
-- ALTER TABLE member AUTO_INCREMENT = 10001;
-- alter table product auto_increment = 400001;
-- alter table orders auto_increment = 500001;

SELECT 
    *
FROM
    member	;
    
desc member;

SELECT 
    *
FROM
    administrator;
    
desc administrator;

SELECT 
    *
FROM
    achievement;
    
desc achievement;

SELECT 
    *
FROM
    degree;
    
SELECT 
    *
FROM
    mountain;
    
desc mountain;

SELECT 
    *
FROM
    achievement;
    
desc achievement;

SELECT 
    *
FROM
    forum_post;
    
desc forum_post;

SELECT 
    *
FROM
    comment_post;
    
-- delete from tour;

desc comment_post;

SELECT 
    *
FROM
    tour;
    
desc tour;
select * from product;
delete from product;
desc product;

desc orders;
select * from orders;
desc order_list;
select * from order_list;

-- insert into tour (tour_hoster, tour_mountain, tour_build, tour_end, tour_activitystart, tour_activityend, tour_min_number, tour_max_number, tour_sitiuation, tour_title, tour_innertext, tour_equip_1) value('10009','11','2020/08/03','2020/09/02','2020/09/08','2020/09/10','8','16','報名中','【台灣的屋脊】東北亞最高峰 玉山主峰',"第一天: 
-- 1800板橋火車站北二門集合(欲共乘者 可載4人)-->2300望鄉部落民宿

-- 第二天: 
-- 0600早餐-->0700出發-->0810檢查哨-->0830塔塔加登山口-->0930孟祿亭
-- -->1130西峰觀景台(自備午餐)-->1500排雲山莊

-- 第三天: 
-- 0300排雲山莊(早早餐)-->0330出發-->0430主南岔路-->0530主北岔路-->0600玉山主峰(海拔3952m)​-->0800排雲山莊(早午餐)-->1400塔塔加登山口(自備午餐)-->1700水里晚餐-->2100板橋火車站解散(與團主共乘者)

-- ＊＊＊很重要＊＊＊
-- 費用600元 
-- (包含排雲山莊住宿費480元＆水里晚餐120元) 
-- 自付：需自備現金
-- 代付：於出發前7日轉帳給我

-- 本行程為玉山主峰登山團 不適合第一次登山 千萬別『逞強』~","");



