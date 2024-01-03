<?php

use App\Signer\Signer;

require '../vendor/autoload.php';

(Dotenv\Dotenv::createImmutable("/home/rc/proj/php/dromRequestSigner"))->load();

$assigner = new Signer($_ENV["APPLICATION_SECRET"]);

$secret = $assigner
    /**
     * main query target 7310a236e7f3f56546aa43b846973fe33b62ea9dd030a3d2bd38f591ae5c2ef7
     *
     * Done
     */
    ->parameter("multiselect[]", ['9_4_16_all', '9_4_15_all'])
    ->parameter("isDamaged", 2)
    ->parameter("stickyRegionId[]", [25])
    ->parameter("cityId[]", [23, 170])
    ->parameter("sortBy", "enterdate")
    ->parameter("revertSort", "1")
    ->parameter("revertSort", "true")
    ->parameter("unsold", 1)
    ->parameter("withoutDocuments", 2)
    ->parameter("mainPhotoWidth[]", [320, "original"])
    ->parameter("onlyWithBulletinsCount", "false")
    ->parameter("page", 0)
    ->parameter("pretty", "true")
    ->parameter("thumbnailsWidth[]", [320,600])
    ->parameter("version", 4)
    ->parameter("withModelsCount", "true")
    ->parameter("recSysDeviceId", "8d07d92c740264189e0bf99976f1aa4d")
    ->parameter("recSysRegionId", 22)
    ->parameter("recSysCityId", 11)
    ->parameter("app_id", "p32")
    ->parameter("timestamp", 1703954197765)

    /**
     * light multi query target a709b52bb7107f1a77a9f351efe02375360d460442e8091b4a5937f3f8f7b836
     *
     * Done
     */
//    ->parameter("limit", 20)
//    ->parameter("offset", 0)
//    ->parameter("photo_formats", ["tn160","tn240","tn360","tn720"])
//    ->parameter("sectionAlias", ["articles","news","travel"])
//    ->parameter("recSysDeviceId", "8d07d92c740264189e0bf99976f1aa4d")
//    ->parameter("recSysRegionId", 22)
//    ->parameter("recSysCityId", 11)
//    ->parameter("app_id", "p32")
//    ->parameter("timestamp", 1703944094624)

    /**
     * multi query target 51cfbd6b476aecc0ca4dbfc25edd8c8303f260a92cb584f261d53e3ae241bb18
     *
     * Done
     */
//    ->parameter("generationPhotoWidth", "600")
//    ->parameter("name", "generation,firm,city,payOnlyCity,model,popularFirmsAndModels,region")
//    ->parameter("version", "2")
//    ->parameter("recSysDeviceId", "8d07d92c740264189e0bf99976f1aa4d")
//    ->parameter("recSysRegionId", "22")
//    ->parameter("recSysCityId", "11")
//    ->parameter("app_id", "p32")
//    ->parameter("timestamp", "1704264854616")

    /**
     * plain query target b9b98131f4434835bc4f9bcf8fb75227aca0654621a2a2f27a95498a051ffbca
     *
     * DONE
     */
//    ->parameter("recSysDeviceId", "8d07d92c740264189e0bf99976f1aa4d")
//    ->parameter("recSysRegionId", 22)
//    ->parameter("recSysCityId", 11)
//    ->parameter("app_id", "p32")
//    ->parameter("timestamp", 1703942249282)

    /**
     * target 2760700529bc34c1b1502ff019d8fd5b5f835fc668ad36db838e2364e9eaaed2
     *
     * DONE
     */
//    ->parameter("deviceId", "8d07d92c740264189e0bf99976f1aa4d")
//    ->parameter("mainPhotoWidth", "original")
//    ->parameter("recSysDeviceId", "8d07d92c740264189e0bf99976f1aa4d")
//    ->parameter("recSysRegionId", 22)
//    ->parameter("recSysCityId", 11)
//    ->parameter("app_id", "p32")
//    ->parameter("timestamp", 1704264855665)

    ->getHash();

die(var_dump($secret));