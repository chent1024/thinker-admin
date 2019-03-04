<?php
/**
 * Created by PhpStorm.
 * User: yangyuance
 * Date: 2019/2/25
 * Time: 下午3:25
 */

namespace Yirius\Admin\form\assembly;


use Yirius\Admin\Admin;
use Yirius\Admin\form\Assembly;

class Upload extends Button
{
    /**
     * @var string
     */
    protected $text = "上传图片";

    /**
     * @var string
     */
    protected $buttonHtml = '<div class="thinkeradmin-upload-list"></div>';

    /**
     * @title isFile
     * @description
     * @createtime 2019/3/3 下午10:05
     * @return Upload
     */
    public function isFile()
    {
        return $this->url("./thinkeradmin/uploads");
    }

    /**
     * @title url
     * @description
     * @createtime 2019/3/3 下午10:04
     * @param $url
     * @return $this
     */
    public function url($url)
    {
        $this->setAttributes("data-url", $url);

        return $this;
    }

    /**
     * @title multi
     * @description
     * @createtime 2019/2/25 下午5:02
     * @throws \Exception
     */
    public function multi()
    {
        $this->setAttributes("data-ismulti", "true");

        return $this;
    }

    /**
     * @title offFancybox
     * @description
     * @createtime 2019/2/25 下午6:01
     * @return $this
     */
    public function offFancybox()
    {
        $this->offAttributes("data-isshow");

        return $this;
    }

    /**
     * @title setName
     * @description
     * @createtime 2019/3/3 下午10:03
     * @param $name
     * @return $this|Button
     */
    public function setName($name)
    {
        $this->name = $name;

        $this->setAttributes("data-name", $this->name);

        return $this;
    }

    /**
     * @title afterSetForm
     * @description
     * @createtime 2019/2/25 下午11:19
     * @throws \Exception
     */
    protected function afterSetForm()
    {
        Admin::script('upload', 2);

        $this
            ->setAttributes('data-isshow', 'true')
            ->setAttributes("lay-upload", "")
            ->setAttributes("data-name", $this->name)
            ->url("./thinkeradmin/uploads?isimage=1");
    }
}