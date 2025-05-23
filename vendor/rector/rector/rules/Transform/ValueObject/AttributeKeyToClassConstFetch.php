<?php

declare (strict_types=1);
namespace Rector\Transform\ValueObject;

final class AttributeKeyToClassConstFetch
{
    /**
     * @readonly
     */
    private string $attributeClass;
    /**
     * @readonly
     */
    private string $attributeKey;
    /**
     * @readonly
     */
    private string $constantClass;
    /**
     * @var array<string, string>
     * @readonly
     */
    private array $valuesToConstantsMap;
    /**
     * @param array<string, string> $valuesToConstantsMap
     */
    public function __construct(string $attributeClass, string $attributeKey, string $constantClass, array $valuesToConstantsMap)
    {
        $this->attributeClass = $attributeClass;
        $this->attributeKey = $attributeKey;
        $this->constantClass = $constantClass;
        $this->valuesToConstantsMap = $valuesToConstantsMap;
    }
    public function getAttributeClass() : string
    {
        return $this->attributeClass;
    }
    public function getAttributeKey() : string
    {
        return $this->attributeKey;
    }
    public function getConstantClass() : string
    {
        return $this->constantClass;
    }
    /**
     * @return array<string, string>
     */
    public function getValuesToConstantsMap() : array
    {
        return $this->valuesToConstantsMap;
    }
}
