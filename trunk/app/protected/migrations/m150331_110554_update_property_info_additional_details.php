<?php

class m150331_110554_update_property_info_additional_details extends CDbMigration
{

    // Use safeUp/safeDown to do migration with transaction
    public function safeUp()
    {
        $this->getDbConnection()->createCommand("
ALTER TABLE  `property_info_additional_details` 
    ADD  `kitchen_countertops` VARCHAR( 25 ) NULL DEFAULT NULL , 
    ADD  `numdenother` TINYINT( 3 ) NULL DEFAULT NULL, 
    ADD  `numloft` TINYINT( 3 ) NULL DEFAULT NULL, 
    ADD  `bath_downstairs` enum('No', 'Yes') DEFAULT 'No',
    ADD  `bedroom_downstairs` enum('No', 'Yes') DEFAULT 'No',
    ADD  `great_room` enum('No', 'Yes') DEFAULT 'No',
    ADD  `baths_34` TINYINT( 3 ) NULL DEFAULT NULL, 
    ADD  `full_baths` TINYINT( 3 ) NULL DEFAULT NULL, 
    ADD  `half_bath` TINYINT( 3 ) NULL DEFAULT NULL,

    ADD  `interior_description` VARCHAR( 112 ) NULL DEFAULT NULL , 
    ADD  `bath_downstairs_description` VARCHAR( 20 ) NULL DEFAULT NULL ,
    ADD  `dining_room_description` VARCHAR( 76 ) NULL DEFAULT NULL ,
    ADD  `dining_room_dimensions` VARCHAR( 7 ) NULL DEFAULT NULL ,
    ADD  `family_room_description` VARCHAR( 86 ) NULL DEFAULT NULL ,
    ADD  `family_room_dimensions` VARCHAR( 7 ) NULL DEFAULT NULL ,
    ADD  `living_room_description` VARCHAR( 76 ) NULL DEFAULT NULL ,
    ADD  `living_room_dimensions` VARCHAR( 7 ) NULL DEFAULT NULL ,
    ADD  `master_bath_description` VARCHAR( 120 ) NULL DEFAULT NULL ,
    ADD  `flooring_description` VARCHAR( 78 ) NULL DEFAULT NULL ,
    ADD  `furnishings_description` VARCHAR( 36 ) NULL DEFAULT NULL ,
    ADD  `kitchen_flooring` VARCHAR( 26 ) NULL DEFAULT NULL ,
    
    ADD  `great_room_dimensions` VARCHAR( 7 ) NULL DEFAULT NULL , 
    ADD  `master_bedroom_description` VARCHAR( 132 ) NULL DEFAULT NULL ,  
    ADD  `master_bedroom_dimensions` VARCHAR( 7 ) NULL DEFAULT NULL , 
    ADD  `bedroom_2nd_description` VARCHAR( 64 ) NULL DEFAULT NULL ,
    ADD  `bedroom_2nd_dimensions` VARCHAR( 7 ) NULL DEFAULT NULL , 
    ADD  `bedroom_3rd_description` VARCHAR( 64 ) NULL DEFAULT NULL ,
    ADD  `bedroom_3rd_dimensions` VARCHAR( 7 ) NULL DEFAULT NULL , 
    ADD  `bedroom_4th_description` VARCHAR( 64 ) NULL DEFAULT NULL ,
    ADD  `bedroom_4th_dimensions` VARCHAR( 7 ) NULL DEFAULT NULL , 
    ADD  `bedroom_5th_description` VARCHAR( 64 ) NULL DEFAULT NULL ,
    ADD  `bedroom_5th_dimensions` VARCHAR( 7 ) NULL DEFAULT NULL , 
    ADD  `num_of_loft_areas` TINYINT( 3 ) NULL DEFAULT NULL, 
    ADD  `loft_description` VARCHAR( 58 ) NULL DEFAULT NULL , 
    ADD  `loft_dimensions` VARCHAR( 7 ) NULL DEFAULT NULL ,
    ADD  `loft_dimensions_1st_floor` VARCHAR( 7 ) NULL DEFAULT NULL , 
    ADD  `loft_dimensions_2nd_floor` VARCHAR( 7 ) NULL DEFAULT NULL ,
    ADD  `unit_description` VARCHAR( 20 ) NULL DEFAULT NULL ,
    ADD  `miscellaneous_description` VARCHAR( 46 ) NULL DEFAULT NULL ,
    
    ADD  `pets_allowed` enum('No', 'Yes') DEFAULT 'No',
    ADD  `pet_description` VARCHAR( 30 ) NULL DEFAULT NULL ,
    ADD  `weight_limit` TINYINT( 3 ) NULL DEFAULT NULL, 
    ADD  `number_of_pets` TINYINT( 3 ) NULL DEFAULT NULL, 
    ADD  `denother_dimensions` VARCHAR( 7 ) NULL DEFAULT NULL ,
    ADD  `bedroom_1_1_12_bath` TINYINT( 3 ) NULL DEFAULT NULL, 
    ADD  `bedroom_1_1_bath` TINYINT( 3 ) NULL DEFAULT NULL, 
    ADD  `bedroom_1_2_bath` TINYINT( 3 ) NULL DEFAULT NULL, 
    ADD  `bedroom_1_rent` TINYINT( 3 ) NULL DEFAULT NULL, 
    ADD  `bedroom_1_num_unfurn` TINYINT( 3 ) NULL DEFAULT NULL, 
    ADD  `bedroom_2_1_12_bath` TINYINT( 3 ) NULL DEFAULT NULL, 
    ADD  `bedroom_2_1_bath` TINYINT( 3 ) NULL DEFAULT NULL, 
    ADD  `bedroom_2_2_bath` TINYINT( 3 ) NULL DEFAULT NULL, 
    ADD  `bedroom_2_rent` TINYINT( 4 ) NULL DEFAULT NULL, 
    ADD  `bedroom_2_num_unfurn` TINYINT( 3 ) NULL DEFAULT NULL, 
    ADD  `bedroom_3_1_12_bath` TINYINT( 3 ) NULL DEFAULT NULL, 
    ADD  `bedroom_3_1_bath` TINYINT( 3 ) NULL DEFAULT NULL, 
    ADD  `bedroom_3_2_bath` TINYINT( 3 ) NULL DEFAULT NULL, 
    ADD  `bedroom_3_rent` TINYINT( 4 ) NULL DEFAULT NULL, 
    ADD  `bedroom_3_num_unfurn` TINYINT( 3 ) NULL DEFAULT NULL, 
    ADD  `studio_1_12_bath` TINYINT( 3 ) NULL DEFAULT NULL, 
    ADD  `studio_1_bath` TINYINT( 3 ) NULL DEFAULT NULL, 
    ADD  `studio_2_bath` TINYINT( 3 ) NULL DEFAULT NULL, 
    ADD  `avg_sqft_amt_for_a_1_bd` TINYINT( 5 ) NULL DEFAULT NULL, 
    ADD  `avg_sqft_amt_for_a_2_bd` TINYINT( 5 ) NULL DEFAULT NULL, 
    ADD  `avg_sqft_amt_for_a_3_bd` TINYINT( 5 ) NULL DEFAULT NULL, 
    ADD  `avg_sqft_amt_for_a_stud` TINYINT( 5 ) NULL DEFAULT NULL 
                ")->execute();

//        $this->getDbConnection()->createCommand("
//ALTER TABLE  `property_info_details_history` 
//                ")->execute();
    }

    public function safeDown()
    {
        $this->getDbConnection()->createCommand("
ALTER TABLE  `property_info_additional_details` 
    DROP  `kitchen_countertops`, 
    DROP  `numdenother`, 
    DROP  `numloft`, 
    DROP  `bath_downstairs`,
    DROP  `bedroom_downstairs`,
    DROP  `great_room`,
    DROP  `baths_34`, 
    DROP  `full_baths`, 
    DROP  `half_bath`,

    DROP  `interior_description`, 
    DROP  `bath_downstairs_description`,
    DROP  `dining_room_description`,
    DROP  `dining_room_dimensions` ,
    DROP  `family_room_description` ,
    DROP  `family_room_dimensions` ,
    DROP  `living_room_description` ,
    DROP  `living_room_dimensions` ,
    DROP  `master_bath_description`,
    DROP  `flooring_description`,
    DROP  `furnishings_description`,
    DROP  `kitchen_flooring` ,
    
    DROP  `great_room_dimensions` , 
    DROP  `master_bedroom_description`,  
    DROP  `master_bedroom_dimensions` , 
    DROP  `bedroom_2nd_description` ,
    DROP  `bedroom_2nd_dimensions` , 
    DROP  `bedroom_3rd_description` ,
    DROP  `bedroom_3rd_dimensions` , 
    DROP  `bedroom_4th_description` ,
    DROP  `bedroom_4th_dimensions` , 
    DROP  `bedroom_5th_description` ,
    DROP  `bedroom_5th_dimensions` , 
    DROP  `num_of_loft_areas`, 
    DROP  `loft_description`, 
    DROP  `loft_dimensions` ,
    DROP  `loft_dimensions_1st_floor` , 
    DROP  `loft_dimensions_2nd_floor` ,
    DROP  `unit_description` ,
    DROP  `miscellaneous_description` ,
    
    DROP  `pets_allowed`,
    DROP  `pet_description` ,
    DROP  `weight_limit`, 
    DROP  `number_of_pets`, 
    DROP  `denother_dimensions` ,
    DROP  `bedroom_1_1_12_bath`, 
    DROP  `bedroom_1_1_bath`, 
    DROP  `bedroom_1_2_bath`, 
    DROP  `bedroom_1_rent`, 
    DROP  `bedroom_1_num_unfurn`, 
    DROP  `bedroom_2_1_12_bath`, 
    DROP  `bedroom_2_1_bath`, 
    DROP  `bedroom_2_2_bath`, 
    DROP  `bedroom_2_rent`, 
    DROP  `bedroom_2_num_unfurn`, 
    DROP  `bedroom_3_1_12_bath`, 
    DROP  `bedroom_3_1_bath`, 
    DROP  `bedroom_3_2_bath`, 
    DROP  `bedroom_3_rent`, 
    DROP  `bedroom_3_num_unfurn`, 
    DROP  `studio_1_12_bath`, 
    DROP  `studio_1_bath`, 
    DROP  `studio_2_bath`, 
    DROP  `avg_sqft_amt_for_a_1_bd`, 
    DROP  `avg_sqft_amt_for_a_2_bd`, 
    DROP  `avg_sqft_amt_for_a_3_bd`, 
    DROP  `avg_sqft_amt_for_a_stud`
                  ")->execute();

//        $this->getDbConnection()->createCommand("
//ALTER TABLE  `property_info_details_history` 
//                ")->execute();
    }

}