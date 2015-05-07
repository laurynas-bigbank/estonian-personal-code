<?php

namespace EProjects\EstonianPersonalCode;

/**
 * Interface for defining personal code object
 */
interface PersonalCodeInterface
{
    /**
     * Returns personal code.
     *
     * @return int
     */
    public function getId();

    /**
     * Extracts gender from personal code.
     *
     * @return string
     */
    public function getGender();

    /**
     * Checks if this personal code belongs to male.
     *
     * @return bool
     */
    public function isMale();

    /**
     * Checks if this personal code belongs to female.
     *
     * @return bool
     */
    public function isFemale();
}
