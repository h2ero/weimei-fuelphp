<?php
/**
 * @name Helper
 * @package name
 * @author h2ero <122750707@qq.com>
 * @link http://blog.h2ero.cn
 */
Class Helper {

    static function get_time($etime) {
        $btime = time();

        if ($btime < $etime) {
            $stime = $btime;
            $endtime = $etime;
        } else {
            $stime = $etime;
            $endtime = $btime;
        }
        $timec = $endtime - $stime;
        $days = intval($timec / 86400);
        $rtime = $timec % 86400;
        $hours = intval($rtime / 3600);
        $rtime = $rtime % 3600;
        $mins = intval($rtime / 60);
        $secs = $rtime % 60;
        if ($days >= 1) {
            return $days . ' 天前';
        }
        if ($hours >= 1) {
            return $hours . ' 小时前';
        }

        if ($mins >= 1) {
            return $mins . ' 分钟前';
        }
        if ($secs >= 1) {
            return $secs . ' 秒前';
        }
    }


    static function toText($text) {
        $order = array('\n', '\r');
        $replace = '\r\n';
        $text = str_replace($order, $replace, htmlspecialchars($text));
        return $text;
    }

    static function text2html($txt) {
        $txt = str_replace("  ", "　", $txt);
        $txt = str_replace("<", "&lt;", $txt);
        $txt = str_replace(">", "&gt;", $txt);
        $txt = preg_replace("/[\r\n]{1,}/isU", "<br/>\r\n", $txt);
        return $txt;
    }

    static function css($css) {
        $result = '';
        foreach ($css as $i) {
            $result.= "<link rel=stylesheet type=text/css href='/style/css/" . $i . ".css'>\n";
        }
        return $result;
    }

    static function js($js) {
        $result = '';
        foreach ($js as $i) {
            $result.="<script src='/style/js/" . $i . ".js'></script>\n";
        }
        return $result;
    }


    static function get_ext($file) {
        $ext = strrpos($file, '.') + 1;
        return substr($file, $ext);
    }


    static function get_mini_pic($src) {
        return $src . '.min.' . self::get_ext($src);
    }

    static function mini_pic($src) {
        return $src . '.mini.' . self::get_ext($src);
    }

    static function url_replace($target) {
        if ($target) {
            //these cahrs are valid in url ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-._~:/?#[]@!$&'()*+,;=
            $search = array(',', '，', '·', ' ', '。', '"', '[', ']', '^', '~', '$', '!', '>', '<', '?', '？');
            $res = str_replace($search, '-', '-' . $target);
            return preg_replace('/-+/', '-', $res);
        }
    }

    static function download_file($url, $filename) {
        // 创建一个新cURL资源
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_TIMEOUT, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // 设置URL和相应的选项
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, false);
        // 抓取URL并把它传递给浏览器
        $data = curl_exec($ch);
        file_put_contents($filename, $data);
        //关闭cURL资源，并且释放系统资源
        curl_close($ch);
        return true;
    }
    //std sort;
    static function heightSort($a,$b){
        if($a['height']>$b['height'])
            return 0;
        else
            return 1;
    }

    static function sort3Array($array) {
        usort($array,'self::heightSort');
        $a = $b = $c = 0;
        $count = count($array);
        for ($i = 0; $i < $count - 1; $i++) {
            if ($a >= $c && $b >= $c) {
                $c+=$array[$i]['height'];
                $r[0][0][] = $array[$i];
                continue;
            }
            if ($b >= $a && $c >= $a) {
                $a+=$array[$i]['height'];
                $r[0][1][] = $array[$i];
                continue;
            }
            if ($a >= $b && $c >= $b) {
                $b+=$array[$i]['height'];
                $r[0][2][] = $array[$i];
                continue;
            }
        }
        $res = array($a, $b, $c);
        sort($res);
        $r[1][0][0] = $c - $res[0];
        $r[1][1][0] = $a - $res[0];
        $r[1][2][0] = $b - $res[0];
        return $r;
    }

    static function sort2Array($array) {
        usort($array,'self::heightSort');
        $a = $b = 0;
        $count = count($array);
        for ($i = 0; $i < $count - 1; $i++) {
            if ($a >= $b) {
                $b+=$array[$i]['height'];
                $r[0][0][] = $array[$i];
                continue;
            } else {
                $a+=$array[$i]['height'];
                $r[0][1][] = $array[$i];
                continue;
            }
        }
        $res = array($a, $b);
        sort($res);
        $r[1][0][0] = $b - $res[0];
        $r[1][1][0] = $a - $res[0];
        return $r;
    }
    static function array2var($vars=''){

        if($vars==''){
            return '';
        }else{
            $var="";
            foreach($vars as $k=>$v){
                $var.="var $k='$v';\r\n";
            }
            return $var;
        }
    }
    static function get_ads($name){
        $ads = \app1\Model_Ads::get_code($name);
        echo $ads[0]['code'];
    }
}

?>
