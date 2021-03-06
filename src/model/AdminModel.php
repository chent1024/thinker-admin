<?php
/**
 * Created by PhpStorm.
 * User: Yirius
 * Date: 2019/2/20
 * Time: 下午5:11
 */

namespace Yirius\Admin\model;


use think\Model;
use Yirius\Admin\model\model\Delete;
use Yirius\Admin\model\model\Lists;
use Yirius\Admin\model\model\Save;
use Yirius\Admin\model\model\Select;

class AdminModel extends Model
{
    protected $autoWriteTimestamp = 'datetime';

    /**
     * @title init
     * @description after __construct, set model other data
     * @createtime 2019/2/20 下午5:17
     */
    protected static function init()
    {

    }

    /**
     * @title adminList
     * @description
     * @createtime 2019/2/27 下午2:22
     * @return Lists
     */
    public static function adminList()
    {
        return (new Lists(new static()));
    }

    /**
     * @title adminDelete
     * @description
     * @createtime 2019/2/27 下午2:22
     * @return Delete
     */
    public static function adminDelete()
    {
        return (new Delete(new static()));
    }

    /**
     * @title adminSave
     * @description
     * @createtime 2019/2/28 下午1:46
     * @return Save
     */
    public static function adminSave()
    {
        return (new Save(new static()));
    }

    /**
     * @title adminSelect
     * @description
     * @createtime 2019/2/28 下午8:05
     * @return Select
     */
    public static function adminSelect()
    {
        return (new Select(new static()));
    }
}