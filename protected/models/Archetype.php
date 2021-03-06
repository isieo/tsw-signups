<?php
/**
 * User: subdee
 * Date: 8/1/13
 * Time: 7:16 AM
 */

class Archetype {
    const ARCHETYPE_TANK = 1;
    const ARCHETYPE_HEALER = 2;
    const ARCHETYPE_DPS = 4;
    const ARCHETYPE_BACKUP = 9;

    public static function getArray() {
        return array(
            self::ARCHETYPE_TANK => Yii::t('default', 'Tank'),
            self::ARCHETYPE_HEALER => Yii::t('default', 'Healer'),
            self::ARCHETYPE_DPS => Yii::t('default', 'DPS'),
            self::ARCHETYPE_BACKUP => Yii::t('default', 'Backup'),
        );
    }

    public static function toText($archetype) {
        switch ($archetype) {
            case self::ARCHETYPE_TANK:
                return Yii::t('default', 'Tank');
            case self::ARCHETYPE_HEALER:
                return Yii::t('default', 'Healer');
            case self::ARCHETYPE_DPS:
                return Yii::t('default', 'DPS');
            case self::ARCHETYPE_BACKUP:
                return Yii::t('default', 'Backup');
            default:
                return false;
                break;
        }
    }

    public static function cssClass($archetype) {
        switch ($archetype) {
            case self::ARCHETYPE_TANK:
                return 'label-info';
            case self::ARCHETYPE_HEALER:
                return 'label-success';
            case self::ARCHETYPE_DPS:
                return 'label-important';
            case self::ARCHETYPE_BACKUP:
                return '';
            default:
                return false;
                break;
        }
    }
}