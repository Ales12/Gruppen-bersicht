<?php

define("IN_MYBB", 1);
define('THIS_SCRIPT', 'listen.php');

require_once "./global.php";

add_breadcrumb("Gruppenübersicht", "groups.php");

switch($mybb->input['action'])
{
    case "bewerber":
        add_breadcrumb("Übersicht Bewerber");
        break;
    case "gryffindor":
        add_breadcrumb("Übersicht Gryffindor");
        break;
    case "ravenclaw":
        add_breadcrumb("Übersicht Ravenclaw");
        break;
    case "hufflepuff":
        add_breadcrumb("Übersicht Hufflepuff");
        break;
    case "slytherin":
        add_breadcrumb("Übersicht Slytherin");
        break;
    case "hogwartspersonal":
        add_breadcrumb("Übersicht Hogwartspersonal");
        break;
    case "sonstige":
        add_breadcrumb("Übersicht sonstige");
        break;
    case "todesser":
        add_breadcrumb("Übersicht Todesser");
        break;
    case "aversio":
        add_breadcrumb("Übersicht Aversio");
        break;

}

/* WENN KEINE AKTION AUSGEWÄHLT WURDE, ZEIGE DIE HAUPTSEITE */
if(!$mybb->input['action'])
{
    eval("\$page = \"".$templates->get("uebersicht")."\";");
    output_page($page);
}

//Bewerber
if($mybb->input['action']=="bewerber")
{
    $select = $db->query("SELECT *
FROM ".TABLE_PREFIX."users u
LEFT JOIN ".TABLE_PREFIX."userfields uf
ON u.uid = uf.ufid
LEFT JOIN ".TABLE_PREFIX."usergroups ug
ON u.usergroup = ug.gid
WHERE u.usergroup = '2'
ORDER BY username ASC");

    while($row = $db->fetch_array($select)){
        $username = format_name($row['username'], $row['usergroup'], $row['displaygroup']);
        $user = build_profile_link($username, $row['uid']);
        $gruppe = $row['title'];
        if(empty($row['avatar']) OR $mybb->user['uid'] == '0'){
            $user_ava = "<img src='{$theme['imgdir']}/noavatar.png'>";
        } else {
            $user_ava = "<img src='{$row['avatar']}'>";
        }

        $row['regdate'] = date("d.m.Y", $row['regdate'] );
        $row['lastvisit'] = date("d.m.Y", $row['lastvisit'] );

        if($row['usertitle'] != ''){
            $row['usertitle'] = "<div class='usertitel'>{$row['usertitle']}</div>";
        } else{
            $usertitles = $cache->read('usertitles');
            if(is_array($usertitles))
            {
                foreach($usertitles as $title)
                {
                    if($row['postnum'] >= $title['posts'])
                    {
                        $row['usertitle'] = $title['title'];
                        break;
                    }
                }
            }
            $row['usertitle'] = "<div class='usertitel'>{$row['usertitle']}</div>";
        }

        eval("\$user_bit .= \"".$templates->get("uebersicht_bit")."\";");
    }

    eval("\$page = \"".$templates->get("uebersicht_gruppen")."\";");
    output_page($page);
}



//Gryffindor
if($mybb->input['action']=="gryffindor")
{
    $select = $db->query("SELECT *
FROM ".TABLE_PREFIX."users u
LEFT JOIN ".TABLE_PREFIX."userfields uf
ON u.uid = uf.ufid
LEFT JOIN ".TABLE_PREFIX."usergroups ug
ON u.usergroup = ug.gid
WHERE u.usergroup = '8'
ORDER BY username ASC");

    while($row = $db->fetch_array($select)){
        $username = format_name($row['username'], $row['usergroup'], $row['displaygroup']);
        $user = build_profile_link($username, $row['uid']);
        $gruppe = $row['title'];
        if(empty($row['avatar']) OR $mybb->user['uid'] == '0'){
            $user_ava = "<img src='{$theme['imgdir']}/noavatar.png'>";
        } else {
            $user_ava = "<img src='{$row['avatar']}'>";
        }

        $row['regdate'] = date("d.m.Y", $row['regdate'] );
        $row['lastvisit'] = date("d.m.Y", $row['lastvisit'] );

        if($row['usertitle'] != ''){
            $row['usertitle'] = "<div class='usertitel'>{$row['usertitle']}</div>";
        } else{
            $usertitles = $cache->read('usertitles');
            if(is_array($usertitles))
            {
                foreach($usertitles as $title)
                {
                    if($row['postnum'] >= $title['posts'])
                    {
                        $row['usertitle'] = $title['title'];
                        break;
                    }
                }
            }
            $row['usertitle'] = "<div class='usertitel'>{$row['usertitle']}</div>";
        }

        eval("\$user_bit .= \"".$templates->get("uebersicht_bit")."\";");
    }

    eval("\$page = \"".$templates->get("uebersicht_gruppen")."\";");
    output_page($page);
}

//Ravenclaw
if($mybb->input['action']=="ravenclaw")
{
    $select = $db->query("SELECT *
FROM ".TABLE_PREFIX."users u
LEFT JOIN ".TABLE_PREFIX."userfields uf
ON u.uid = uf.ufid
LEFT JOIN ".TABLE_PREFIX."usergroups ug
ON u.usergroup = ug.gid
WHERE u.usergroup = '9'
ORDER BY username ASC");

    while($row = $db->fetch_array($select)){
        $username = format_name($row['username'], $row['usergroup'], $row['displaygroup']);
        $user = build_profile_link($username, $row['uid']);
        $gruppe = $row['title'];
        if(empty($row['avatar']) OR $mybb->user['uid'] == '0'){
            $user_ava = "<img src='{$theme['imgdir']}/noavatar.png'>";
        } else {
            $user_ava = "<img src='{$row['avatar']}'>";
        }

        $row['regdate'] = date("d.m.Y", $row['regdate'] );
        $row['lastvisit'] = date("d.m.Y", $row['lastvisit'] );

        if($row['usertitle'] != ''){
            $row['usertitle'] = "<div class='usertitel'>{$row['usertitle']}</div>";
        } else{
            $usertitles = $cache->read('usertitles');
            if(is_array($usertitles))
            {
                foreach($usertitles as $title)
                {
                    if($row['postnum'] >= $title['posts'])
                    {
                        $row['usertitle'] = $title['title'];
                        break;
                    }
                }
            }
            $row['usertitle'] = "<div class='usertitel'>{$row['usertitle']}</div>";
        }

        eval("\$user_bit .= \"".$templates->get("uebersicht_bit")."\";");
    }

    eval("\$page = \"".$templates->get("uebersicht_gruppen")."\";");
    output_page($page);
}

//Hufflepuff
if($mybb->input['action']=="hufflepuff")
{
    $select = $db->query("SELECT *
FROM ".TABLE_PREFIX."users u
LEFT JOIN ".TABLE_PREFIX."userfields uf
ON u.uid = uf.ufid
LEFT JOIN ".TABLE_PREFIX."usergroups ug
ON u.usergroup = ug.gid
WHERE u.usergroup = '10'
ORDER BY username ASC");

    while($row = $db->fetch_array($select)){
        $username = format_name($row['username'], $row['usergroup'], $row['displaygroup']);
        $user = build_profile_link($username, $row['uid']);
        $gruppe = $row['title'];
        if(empty($row['avatar']) OR $mybb->user['uid'] == '0'){
            $user_ava = "<img src='{$theme['imgdir']}/noavatar.png'>";
        } else {
            $user_ava = "<img src='{$row['avatar']}'>";
        }

        $row['regdate'] = date("d.m.Y", $row['regdate'] );
        $row['lastvisit'] = date("d.m.Y", $row['lastvisit'] );

        if($row['usertitle'] != ''){
            $row['usertitle'] = "<div class='usertitel'>{$row['usertitle']}</div>";
        } else{
            $usertitles = $cache->read('usertitles');
            if(is_array($usertitles))
            {
                foreach($usertitles as $title)
                {
                    if($row['postnum'] >= $title['posts'])
                    {
                        $row['usertitle'] = $title['title'];
                        break;
                    }
                }
            }
            $row['usertitle'] = "<div class='usertitel'>{$row['usertitle']}</div>";
        }

        eval("\$user_bit .= \"".$templates->get("uebersicht_bit")."\";");
    }

    eval("\$page = \"".$templates->get("uebersicht_gruppen")."\";");
    output_page($page);
}

//slytherin
if($mybb->input['action']=="slytherin")
{
    $select = $db->query("SELECT *
FROM ".TABLE_PREFIX."users u
LEFT JOIN ".TABLE_PREFIX."userfields uf
ON u.uid = uf.ufid
LEFT JOIN ".TABLE_PREFIX."usergroups ug
ON u.usergroup = ug.gid
WHERE u.usergroup = '11'
ORDER BY username ASC");

    while($row = $db->fetch_array($select)){
        $username = format_name($row['username'], $row['usergroup'], $row['displaygroup']);
        $user = build_profile_link($username, $row['uid']);
        $gruppe = $row['title'];
        if(empty($row['avatar']) OR $mybb->user['uid'] == '0'){
            $user_ava = "<img src='{$theme['imgdir']}/noavatar.png'>";
        } else {
            $user_ava = "<img src='{$row['avatar']}'>";
        }

        $row['regdate'] = date("d.m.Y", $row['regdate'] );
        $row['lastvisit'] = date("d.m.Y", $row['lastvisit'] );

        if($row['usertitle'] != ''){
            $row['usertitle'] = "<div class='usertitel'>{$row['usertitle']}</div>";
        } else{
            $usertitles = $cache->read('usertitles');
            if(is_array($usertitles))
            {
                foreach($usertitles as $title)
                {
                    if($row['postnum'] >= $title['posts'])
                    {
                        $row['usertitle'] = $title['title'];
                        break;
                    }
                }
            }
            $row['usertitle'] = "<div class='usertitel'>{$row['usertitle']}</div>";
        }

        eval("\$user_bit .= \"".$templates->get("uebersicht_bit")."\";");
    }

    eval("\$page = \"".$templates->get("uebersicht_gruppen")."\";");
    output_page($page);
}




//hogwartspersonal
if($mybb->input['action']=="hogwartspersonal")
{
    $select = $db->query("SELECT *
FROM ".TABLE_PREFIX."users u
LEFT JOIN ".TABLE_PREFIX."userfields uf
ON u.uid = uf.ufid
LEFT JOIN ".TABLE_PREFIX."usergroups ug
ON u.usergroup = ug.gid
WHERE u.usergroup = '16'
ORDER BY username ASC");

    while($row = $db->fetch_array($select)){
        $username = format_name($row['username'], $row['usergroup'], $row['displaygroup']);
        $user = build_profile_link($username, $row['uid']);
        $gruppe = $row['title'];
        if(empty($row['avatar']) OR $mybb->user['uid'] == '0'){
            $user_ava = "<img src='{$theme['imgdir']}/noavatar.png'>";
        } else {
            $user_ava = "<img src='{$row['avatar']}'>";
        }

        $row['regdate'] = date("d.m.Y", $row['regdate'] );
        $row['lastvisit'] = date("d.m.Y", $row['lastvisit'] );

        if($row['usertitle'] != ''){
            $row['usertitle'] = "<div class='usertitel'>{$row['usertitle']}</div>";
        } else{
            $usertitles = $cache->read('usertitles');
            if(is_array($usertitles))
            {
                foreach($usertitles as $title)
                {
                    if($row['postnum'] >= $title['posts'])
                    {
                        $row['usertitle'] = $title['title'];
                        break;
                    }
                }
            }
            $row['usertitle'] = "<div class='usertitel'>{$row['usertitle']}</div>";
        }

        eval("\$user_bit .= \"".$templates->get("uebersicht_bit")."\";");
    }

    eval("\$page = \"".$templates->get("uebersicht_gruppen")."\";");
    output_page($page);
}

//sonstige
if($mybb->input['action']=="sonstige")
{
    $select = $db->query("SELECT *
FROM ".TABLE_PREFIX."users u
LEFT JOIN ".TABLE_PREFIX."userfields uf
ON u.uid = uf.ufid
LEFT JOIN ".TABLE_PREFIX."usergroups ug
ON u.usergroup = ug.gid
WHERE u.usergroup = '17'
ORDER BY username ASC");

    while($row = $db->fetch_array($select)){
        $username = format_name($row['username'], $row['usergroup'], $row['displaygroup']);
        $user = build_profile_link($username, $row['uid']);
        $gruppe = $row['title'];
        if(empty($row['avatar']) OR $mybb->user['uid'] == '0'){
            $user_ava = "<img src='{$theme['imgdir']}/noavatar.png'>";
        } else {
            $user_ava = "<img src='{$row['avatar']}'>";
        }

        $row['regdate'] = date("d.m.Y", $row['regdate'] );
        $row['lastvisit'] = date("d.m.Y", $row['lastvisit'] );

        if($row['usertitle'] != ''){
            $row['usertitle'] = "<div class='usertitel'>{$row['usertitle']}</div>";
        } else{
            $usertitles = $cache->read('usertitles');
            if(is_array($usertitles))
            {
                foreach($usertitles as $title)
                {
                    if($row['postnum'] >= $title['posts'])
                    {
                        $row['usertitle'] = $title['title'];
                        break;
                    }
                }
            }
            $row['usertitle'] = "<div class='usertitel'>{$row['usertitle']}</div>";
        }

        eval("\$user_bit .= \"".$templates->get("uebersicht_bit")."\";");
    }

    eval("\$page = \"".$templates->get("uebersicht_gruppen")."\";");
    output_page($page);
}

//todesser
if($mybb->input['action']=="todesser")
{
    $select = $db->query("SELECT *
FROM ".TABLE_PREFIX."users u
LEFT JOIN ".TABLE_PREFIX."userfields uf
ON u.uid = uf.ufid
LEFT JOIN ".TABLE_PREFIX."usergroups ug
ON u.usergroup = ug.gid
WHERE u.usergroup = '18'
ORDER BY username ASC");

    while($row = $db->fetch_array($select)){
        $username = format_name($row['username'], $row['usergroup'], $row['displaygroup']);
        $user = build_profile_link($username, $row['uid']);
        $gruppe = $row['title'];
        if(empty($row['avatar']) OR $mybb->user['uid'] == '0'){
            $user_ava = "<img src='{$theme['imgdir']}/noavatar.png'>";
        } else {
            $user_ava = "<img src='{$row['avatar']}'>";
        }

        $row['regdate'] = date("d.m.Y", $row['regdate'] );
        $row['lastvisit'] = date("d.m.Y", $row['lastvisit'] );

        if($row['usertitle'] != ''){
            $row['usertitle'] = "<div class='usertitel'>{$row['usertitle']}</div>";
        } else{
            $usertitles = $cache->read('usertitles');
            if(is_array($usertitles))
            {
                foreach($usertitles as $title)
                {
                    if($row['postnum'] >= $title['posts'])
                    {
                        $row['usertitle'] = $title['title'];
                        break;
                    }
                }
            }
            $row['usertitle'] = "<div class='usertitel'>{$row['usertitle']}</div>";
        }

        eval("\$user_bit .= \"".$templates->get("uebersicht_bit")."\";");
    }

    eval("\$page = \"".$templates->get("uebersicht_gruppen")."\";");
    output_page($page);
}

//aversio
if($mybb->input['action']=="aversio")
{
    $select = $db->query("SELECT *
FROM ".TABLE_PREFIX."users u
LEFT JOIN ".TABLE_PREFIX."userfields uf
ON u.uid = uf.ufid
LEFT JOIN ".TABLE_PREFIX."usergroups ug
ON u.usergroup = ug.gid
WHERE u.usergroup = '19'
ORDER BY username ASC");

    while($row = $db->fetch_array($select)){
        $username = format_name($row['username'], $row['usergroup'], $row['displaygroup']);
        $user = build_profile_link($username, $row['uid']);
        $gruppe = $row['title'];
        if(empty($row['avatar']) OR $mybb->user['uid'] == '0'){
            $user_ava = "<img src='{$theme['imgdir']}/noavatar.png'>";
        } else {
            $user_ava = "<img src='{$row['avatar']}'>";
        }

        $row['regdate'] = date("d.m.Y", $row['regdate'] );
        $row['lastvisit'] = date("d.m.Y", $row['lastvisit'] );

        if($row['usertitle'] != ''){
            $row['usertitle'] = "<div class='usertitel'>{$row['usertitle']}</div>";
        } else{
            $usertitles = $cache->read('usertitles');
            if(is_array($usertitles))
            {
                foreach($usertitles as $title)
                {
                    if($row['postnum'] >= $title['posts'])
                    {
                        $row['usertitle'] = $title['title'];
                        break;
                    }
                }
            }
            $row['usertitle'] = "<div class='usertitel'>{$row['usertitle']}</div>";
        }

        eval("\$user_bit .= \"".$templates->get("uebersicht_bit")."\";");
    }

    eval("\$page = \"".$templates->get("uebersicht_gruppen")."\";");
    output_page($page);
}

?>