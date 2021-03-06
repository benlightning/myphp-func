/**
 * 按照身份证获取年龄
 */
function getAgeByID($id)
{
    //过了这年的生日才算多了1周岁
    if (empty($id)) {
        return '';
    }
    $date = strtotime(substr($id, 6, 8));
    //获得出生年月日的时间戳
    $today = strtotime('today');
    //获得今日的时间戳
    $diff = floor(($today - $date) / 86400 / 365);
    //得到两个日期相差的大体年数

    //strtotime加上这个年数后得到那日的时间戳后与今日的时间戳相比
    $age = strtotime(substr($id, 6, 8) . ' +' . $diff . 'years') > $today ? ($diff + 1) : $diff;

    return $age;
}
