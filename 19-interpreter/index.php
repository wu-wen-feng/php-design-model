<?php
/**
 * Created by PhpStorm.
 * User: Jiang
 * Date: 2015/5/31
 * Time: 15:51
 */

/**环境角色
 * Class PlayContent
 */
class PlayContent
{
    public $content;
}

/**抽象解析器
 * Class IExpress
 */
abstract class IExpress
{
    //-----------------解释器----------------
    public function Translate(PlayContent $play_content)
    {
        if (empty($play_content->content)) {
            return false;
        }
        $key = mb_substr($play_content->content, 0, 1);
        $play_content->content = mb_substr($play_content->content, 2);
        $val = mb_substr($play_content->content, 0, mb_strpos($play_content->content, ' '));
        $play_content->content = mb_substr($play_content->content, mb_strpos($play_content->content, ' ') + 1);
        return $this->Excute($key, $val);
    }

    public abstract function Excute($key, $val);
}

//------------------------具体解析器-------------
/**音符
 * Class MusicNote
 */
class MusicNote extends IExpress
{
    public function Excute($key, $val)
    {
        $note = "";
        switch ($key) {
            case "C":
                $note = "1";
                break;
            case "D":
                $note = "2";
                break;
            case "E":
                $note = "3";
                break;
            case "F":
                $note = "4";
                break;
            case "G":
                $note = "5";
                break;
            case "A":
                $note = "6";
                break;
            case "B":
                $note = "7";
                break;
        }
        return $note;
    }
}

/**音阶
 * Class MusicScale
 */
class MusicScale extends IExpress
{
    public function Excute($key, $val)
    {
        $scale = "";
        switch ($val) {
            case "1":
                $scale = "低音";
                break;
            case "2":
                $scale = "中音";
                break;
            case "3":
                $scale = "高音";
                break;
        }
        return $scale;
    }
}

$play_content = new PlayContent();
$play_content->content = "O 2 E 0.5 G 0.5 A 3 E 0.5 G 0.5 D 3 E 0.5 G 0.5 A 0.5 O 3 C 1 O 2 A 0.5 G 1 C 0.5 E 0.5 D 3 ";
$interpreter = null;
try {
    while (!empty($play_content->content)) {
        $str = mb_substr($play_content->content, 0, 1);
        switch ($str) {
            case "O":
                $interpreter = new MusicScale();
                break;
            case "C":
            case "D":
            case "E":
            case "F":
            case "G":
            case "A":
            case "B":
                $interpreter = new MusicNote();
                break;
        }
        echo $interpreter->Translate($play_content) . '::';
    }
} catch (Exception $e) {
    echo $e->getMessage();
}