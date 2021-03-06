<?php

/**
 * This is the model class for table "w_unitkerja".
 *
 * The followings are the available columns in table 'w_unitkerja':
 * @property integer $id
 * @property string $id_unit
 * @property string $nama
 * @property string $status
 * @property string $id_cli
 */
class WUnitkerja extends CActiveRecord {
    
    
    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return WUnitkerja the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'w_unitkerja';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('id_unit, nama, id_cli', 'required'),
            array('id_unit, nama', 'length', 'max' => 255),
            array('status', 'length', 'max' => 1),
            array('id_cli', 'length', 'max' => 10),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, id_unit, nama, status, id_cli', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'id_unit' => 'Id Unit',
            'nama' => 'Nama',
            'status' => 'Status',
            'id_cli' => 'Id Cli',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('id_unit', $this->id_unit, true);
        $criteria->compare('nama', $this->nama, true);
        $criteria->compare('status', $this->status, true);
        $criteria->compare('id_cli', $this->id_cli, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

}