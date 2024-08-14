<?php

namespace Flexnet\ProductPackagingService\Type;

class GetUsersForProductCategoryResponseDataType
{
    /**
     * @var \Flexnet\ProductPackagingService\Type\UserIdentifierType|array<\Flexnet\ProductPackagingService\Type\UserIdentifierType>|null
     */
    private $user;

    /**
     * Constructor
     *
     * @param  \Flexnet\ProductPackagingService\Type\UserIdentifierType|array<\Flexnet\ProductPackagingService\Type\UserIdentifierType>|null  $user
     */
    public function __construct(\Flexnet\ProductPackagingService\Type\UserIdentifierType|array|null $user = null)
    {
        $this->user = $user;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UserIdentifierType|array<\Flexnet\ProductPackagingService\Type\UserIdentifierType>|null  $user
     */
    public static function create(\Flexnet\ProductPackagingService\Type\UserIdentifierType|array|null $user = null)
    {
        return new static(...\func_get_args());
    }

    /**
     * @return \Flexnet\ProductPackagingService\Type\UserIdentifierType|array<\Flexnet\ProductPackagingService\Type\UserIdentifierType>|null
     */
    public function getUser(): \Flexnet\ProductPackagingService\Type\UserIdentifierType|array|null
    {
        return $this->user;
    }

    /**
     * @param  \Flexnet\ProductPackagingService\Type\UserIdentifierType|array<\Flexnet\ProductPackagingService\Type\UserIdentifierType>|null  $user
     */
    public function withUser(\Flexnet\ProductPackagingService\Type\UserIdentifierType|array|null $user): \Flexnet\ProductPackagingService\Type\GetUsersForProductCategoryResponseDataType
    {
        $new = clone $this;
        $new->user = $user;

        return $new;
    }
}
