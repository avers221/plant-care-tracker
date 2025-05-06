<?php

namespace App\Core\Entities;

use App\Core\Attributes\EntityArrayType;
use App\Core\Attributes\EntityType;
use ReflectionClass;

class AbstractEntity
{
    private static array $reflectionCache = [];

    /**
     * @throws \ReflectionException
     */
    public function __construct(array $data)
    {
        $class = static::class;

        // Используем мемоизированный ReflectionClass
        if (!isset(self::$reflectionCache[$class])) {
            self::$reflectionCache[$class] = new ReflectionClass($class);
        }

        $reflection = self::$reflectionCache[$class];

        foreach ($data as $key => $value) {
            if ($reflection->hasProperty($key)) {
                $property = $reflection->getProperty($key);

                // Получаем атрибуты для данного поля
                $entityAttribute = $property->getAttributes(EntityType::class)[0] ?? null;
                $entityArrayAttribute = $property->getAttributes(EntityArrayType::class)[0] ?? null;

                // Если это поле массивов Entity
                if (is_array($value) && $entityArrayAttribute) {
                    $entityClass = $entityArrayAttribute->getArguments()[0];
                    $this->$key = array_map(fn($item) => new $entityClass($item), $value);
                }

                // Если это одиночный Entity
                elseif (is_array($value) && $entityAttribute) {
                    $entityClass = $entityAttribute->getArguments()[0];
                    $this->$key = new $entityClass($value);
                }
                // Простое присвоение
                else {
                    $this->$key = $value;
                }
            }
        }
    }
}
