<?php

namespace EProjects\EstonianPersonalCode;

/**
 * Value object for personal code
 *
 * @author    Laurynas Gavienas
 * @copyright 2015 Laurynas Gavienas / E-Projects (http://www.e-projects.lt)
 * @licence   http://www.opensource.org/licenses/mit-license.php MIT
 */
class PersonalCode implements PersonalCodeInterface
{

    /**
     * Gender constants.
     */
    const GENDER_MALE = 'male';
    const GENDER_FEMALE = 'female';
    const GENDER_UNKNOWN = 'unknown';

    /**
     * @var array Array of digits that are used to designate a male.
     */
    protected $maleFirstDigits = [1, 3, 5];

    /**
     * @var array Array of digits that are used to designate a female.
     */
    protected $femaleFirstDigit = [2, 4, 6];

    /**
     * @var int
     */
    private $personalCode;

    /**
     * @param int $personalCode
     */
    public function __construct($personalCode)
    {

        $this->personalCode = $personalCode;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->personalCode;
    }

    /**
     * {@inheritdoc}
     */
    public function getGender()
    {

        if ($this->isMale()) {
            return self::GENDER_MALE;
        }
        if ($this->isFemale()) {
            return self::GENDER_FEMALE;
        }

        return self::GENDER_UNKNOWN;
    }

    /**
     * Checks if this personal code belongs to male.
     *
     * @return bool
     */
    public function isMale()
    {

        return in_array($this->getFirstDigit(), $this->maleFirstDigits);
    }

    /**
     * Checks if this personal code belongs to female.
     *
     * @return bool
     */
    public function isFemale()
    {

        return in_array($this->getFirstDigit(), $this->femaleFirstDigit);
    }

    public function getBirthday()
    {

        $firstDigit = $this->getFirstDigit();

    }

    /**
     * Returns first digit of the personal code.
     *
     * @return int
     */
    private function getFirstDigit()
    {

        return (int) substr($this->personalCode, 0, 1);
    }
}
