<?php

namespace App\Http\Controllers\API\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShopInfoUpdateRequest;
use App\Http\Requests\ShopSettingUpdateRequest;
use App\Http\Requests\ShopUserUpdateRequest;
use App\Http\Resources\SellerUserResource;
use App\Repositories\ShopRepository;
use App\Repositories\UserRepository;

class UserController extends Controller
{
    /**
     * show user details.
     */
    public function show()
    {
        $user = auth()->user();

        return $this->json('user details', [
            'user' => SellerUserResource::make($user),
        ]);
    }

    /**
     * update user profile.
     */
    public function updateProfile(ShopUserUpdateRequest $request)
    {
        // update shop user
        UserRepository::updateByRequest($request, auth()->user());

        return $this->json('Profile is updated successfully', [
            'user' => SellerUserResource::make(auth()->user()),
        ]);
    }

    /**
     * update shop info.
     */
    public function shopUpdate(ShopInfoUpdateRequest $request)
    {
        /** @var Shop $shop */
        $shop = generaleSetting('shop');

        // update shop user
        ShopRepository::updateShopInfo($shop, $request);

        return $this->json('shop info is updated successfully', [
            'user' => SellerUserResource::make(auth()->user()),
        ]);
    }

    /**
     * update shop info.
     */
    public function shopSettingUpdate(ShopSettingUpdateRequest $request)
    {
        /** @var App\Models\Shop $shop */
        $shop = generaleSetting('shop');

        // update shop user
        ShopRepository::updateShopSetting($shop, $request);

        return $this->json('shop setting is updated successfully', [
            'user' => SellerUserResource::make(auth()->user()),
        ]);
    }

    /**
     * update profile.
     */
    public function update(ShopInfoUpdateRequest $request)
    {
        /** @var Shop $shop */
        $shop = generaleSetting('shop');

        // update shop
        $shop = ShopRepository::updateByRequest($shop, $request);

        return $this->json('Profile is updated successfully', [
            'user' => SellerUserResource::make($shop->user),
        ]);
    }
}
