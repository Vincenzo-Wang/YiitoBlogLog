<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%admin_log}}".
 *
 * @property string $log_id
 * @property integer $admin_id
 * @property string $log_info
 * @property string $log_ip
 * @property string $log_url
 * @property integer $log_time
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%admin_log}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['admin_id', 'log_time'], 'integer'],
            [['log_info'], 'string', 'max' => 255],
            [['log_ip'], 'string', 'max' => 30],
            [['log_url'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'log_id' => '表id',
            'admin_id' => '管理员id',
            'log_info' => '日志描述',
            'log_ip' => 'ip地址',
            'log_url' => 'url',
            'log_time' => '日志时间',
        ];
    }
}
