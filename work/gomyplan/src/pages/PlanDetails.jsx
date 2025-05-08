import { useState } from "react";
import styled from "styled-components";
import { Link } from "react-router-dom";

// react-bootstrap
import Card from "react-bootstrap/Card";
import Form from "react-bootstrap/Form";
import InputGroup from "react-bootstrap/InputGroup";
import Modal from "react-bootstrap/Modal";

// Swiper
import { Swiper, SwiperSlide } from "swiper/react";
import { Pagination } from "swiper/modules";
import { Navigation } from "swiper/modules";
import "swiper/css";
import "swiper/css/pagination";
import "swiper/css/navigation";

// component
import Header from "../components/Header";
import Footer from "../components/Footer";
import Nav from "../components/Nav";
import PageContainer from "../components/PageContainer";
import PageContent from "../components/PageContent";
import CountButton from "../components/CountButton";
import CustomCalendar from "../components/CustomCalendar";
import Input from "../components/Input";
import BigButton from "../components/BigButton";

// img
import PlanImg from "../assets/img/plan_main2.jpg";
import PlanThum1 from "../assets/img/plan_thum7.png";
import PlanThum2 from "../assets/img/plan_thum8.png";
import PlanThum3 from "../assets/img/plan_thum9.png";
import PlanThum4 from "../assets/img/plan_thum10.png";
import PlanThum5 from "../assets/img/plan_thum11.png";
import PlanThum6 from "../assets/img/plan_thum12.png";
import PlanThum7 from "../assets/img/plan_thum13.png";
import ListIcon from "../assets/img/icon_list.png";
import Profile from "../assets/img/member_profile.png";
import HowToIcon1 from "../assets/img/how_to_icon1.png";
import HowToIcon2 from "../assets/img/how_to_icon2.png";
import HowToIcon3 from "../assets/img/how_to_icon3.png";
import CommentProfile1 from "../assets/img/icon_profile3.png";
import CommentProfile2 from "../assets/img/icon_profile4.png";
import CommentProfile3 from "../assets/img/icon_profile5.png";
import ModalArrow from "../assets/img/modal_arrow.png";
import IconHeart from "../assets/img/icon_heart.png";
import IconHeartAcitve from "../assets/img/icon_heart2.png";
import IconMinus from "../assets/img/btn_minus.png";
import IconPlus from "../assets/img/btn_plus.png";
import PlanDetailThum1 from "../assets/img/plan_detail_thum1.png";
import PlanDetailThum2 from "../assets/img/plan_detail_thum2.png";
import PlanDetailThum3 from "../assets/img/plan_detail_thum3.png";
import PlanDetailThum4 from "../assets/img/plan_detail_thum4.png";
import DetailMain from "../assets/img/detail_main.png";
import Map from "../assets/img/map_img2.png";
import DetailSubimg1 from "../assets/img/detail_subimg1.png";
import DetailSubimg2 from "../assets/img/detail_subimg2.png";
import DetailSubimg3 from "../assets/img/detail_subimg3.png";
import DetailSubimg4 from "../assets/img/detail_subimg4.png";
import DetailSubimg5 from "../assets/img/detail_subimg5.png";

// style
const PlanPhotoBox = styled.div`
  position: relative;
`;

const PlanPhotoImg = styled.div`
  position: relative;
  width: 100%;
  aspect-ratio: 1 / 0.5384615;
  display: flex;
  overflow: hidden;

  img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  &::after {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.4));
  }

  .swiper-pagination {
    background: rgba(8, 41, 79, 0.9);
    border-radius: 6px;
    padding: 4px 10px;
    font-weight: 500;
    font-size: 12px;
    line-height: 130%;
    color: var(--color-white);
    width: auto;
    top: 20px;
    bottom: auto;
    left: auto;
    right: 20px;
  }
`;

const PlanContent1 = styled.div`
  padding: 20px;
  border-bottom: 1px solid var(--color-border);
  margin-bottom: 40px;
  display: flex;
  flex-direction: column;
  gap: 30px;
`;

const PlanTitBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 4px;

  &.cardver {
    gap: 14px;
  }
`;

const PlanTxtTitle = styled.div`
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 16px;
  line-height: 130%;
  color: var(--color-black);
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 10px;
  transition: var(--transition);

  &.blue {
    color: var(--color-default);
  }

  span {
    flex: 1;
  }

  .darkMode & {
    color: var(--color-bg2);
  }

  .darkMode &.blue {
    color: var(--color-bg2);
  }
`;

const PlanTxtDesc = styled.div`
  font-weight: 400;
  font-size: 12px;
  line-height: 130%;
  color: var(--color-default);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-point);
  }
`;

const CountBtnBox = styled.div`
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
`;

const PlanTime = styled.div`
  font-family: var(--font-family);
  font-weight: 500;
  font-size: 12px;
  line-height: 130%;
  color: var(--color-darkgray);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-gray);
  }
`;

const PlanContent2 = styled.div`
  padding: 0 20px;
  margin-bottom: 40px;

  &:last-child {
    margin-bottom: 60px;
  }
`;

const CardList = styled.div`
  display: flex;
`;

const CardIcon = styled.button`
  background: url(${ListIcon}) no-repeat center / contain;
  width: 18px;
  aspect-ratio: 1 / 1;
  position: absolute;
  left: 20px;
  top: 20px;
`;

const PlanContent3 = styled.div`
  padding: 30px 0;
  border-bottom: 1px solid var(--color-border);
  border-top: 1px solid var(--color-border);
  width: calc(100% - 40px);
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  gap: 40px;
  margin-bottom: 40px;
  transition: var(--transition);

  .darkMode & {
    border-color: var(--color-gray);
  }
`;

const ProfileBox = styled(Link)`
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0 4px 15px 0 rgba(0, 74, 123, 0.2);
  background: var(--color-white);
  display: flex;
  align-items: center;
  gap: 16px;
  transition: var(--transition);

  .darkMode & {
    background: var(--color-darkgray2);
  }
`;

const ProfileImg = styled.img`
  width: 40px;
  aspect-ratio: 1 / 1;
  box-shadow: 0 0 4px 0 rgba(0, 74, 123, 0.4);
  border-radius: 50%;
`;

const ProfileTxtBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 6xp;
`;

const ProfileTItle = styled.p`
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 16px;
  line-height: 130%;
  color: var(--color-black);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-bg2);
  }
`;

const ProfileDesc = styled.p`
  font-weight: 400;
  font-size: 10px;
  line-height: 130%;
  color: var(--color-darkgray);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-border);
  }
`;

const HowToBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 10px;
`;

const HowToItem = styled.div`
  border-radius: 10px;
  padding: 14px;
  box-shadow: 0 4px 15px 0 rgba(0, 74, 123, 0.2);
  background: var(--color-white);
  display: flex;
  align-items: center;
  gap: 16px;
  transition: var(--transition);

  .darkMode & {
    background: var(--color-darkgray2);
  }
`;

const HowToIcon = styled.img`
  width: 50px;
  aspect-ratio: 1 / 1;
`;

const HowToTxtBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 4px;
`;

const HowToTitle = styled.p`
  font-weight: 600;
  font-size: 14px;
  line-height: 130%;
  color: var(--color-darkgray);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-border);
  }
`;

const HowToDesc = styled.p`
  font-weight: 400;
  font-size: 12px;
  line-height: 130%;
  color: var(--color-darkgray);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-border);
  }
`;

const AddBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 14px;
`;

const AddItem = styled.div`
  display: flex;
  flex-direction: column;
  gap: 6px;
`;

const AddTitle = styled.p`
  font-family: var(--font-family);
  font-weight: 600;
  font-size: 14px;
  line-height: 130%;
  color: var(--color-darkgray);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-border);
  }
`;

const AddDesc = styled.p`
  font-weight: 400;
  font-size: 12px;
  line-height: 130%;
  color: var(--color-darkgray);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-border);
  }
`;

const PlanContent4 = styled.div`
  padding: 0 20px;
  display: flex;
  flex-direction: column;
  gap: 10px;
  margin-bottom: 50px;
`;

const CommentsList = styled.div`
  display: flex;
  flex-direction: column;
  border-radius: 10px;
  padding: 0px 10px;
  box-shadow: 0 4px 15px 0 rgba(0, 74, 123, 0.2);
  background: var(--color-white);
  transition: var(--transition);

  .darkMode & {
    background: var(--color-darkgray2);
  }
`;

const CommentsItem = styled.div`
  display: flex;
  align-items: flex-start;
  gap: 14px;
  border-bottom: 1px solid var(--color-border);
  padding: 14px 10px;
  transition: var(--transition);

  &:last-child {
    border-bottom: 0;
  }

  .darkMode & {
    border-color: var(--color-gray);
  }
`;

const CommentsImg = styled.img`
  width: 34px;
  aspect-ratio: 1 / 1;
  border-radius: 50%;
`;

const CommentsTxtBox = styled.div`
  flex: 1;
  display: flex;
  flex-direction: column;
  gap: 5px;
`;

const CommentsTitle = styled.p`
  display: flex;
  align-items: center;
  justify-content: space-between;
  font-weight: 500;
  font-size: 12px;
  line-height: 130%;
  color: var(--color-black);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-bg2);
  }
`;

const CommentsTime = styled.span`
  font-size: 10px;
  color: var(--color-gray);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-gray);
  }
`;

const CommentsDesc = styled.p`
  font-weight: 400;
  font-size: 10px;
  line-height: 130%;
  color: var(--color-darkgray);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-gray);
  }
`;

const CommentsInputBox = styled.div`
  margin-top: 16px;
  display: flex;
  gap: 20px;

  textarea.form-control {
    flex: 1;
    border: 1px solid var(--color-border);
    border-radius: 6px;
    padding: 8px 14px;
    height: 56px;
    min-height: 56px;
    font-weight: 400;
    font-size: 12px;
    line-height: 130%;
    color: var(--color-default);
    box-shadow: inset 0 0 20px 0 rgba(66, 169, 236, 0.3);
    background: var(--color-input);
    transition: var(--transition);
  }

  & textarea::placeholder {
    color: #79a5d8;
  }

  & textarea:focus {
    border: 1px solid var(--color-main);
    color: var(--color-default);
    outline: none;
  }

  button {
    width: 50px;
    height: unset !important;
    border-radius: 6px !important;
    padding: 8px 0px;
    font-weight: 400;
    font-size: 10px !important;
    line-height: 130%;
    text-align: center;
    color: var(--color-input);
  }

  .darkMode & textarea.form-control {
    border: 1px solid var(--color-point);
    background-color: var(--color-darknavy2);
    color: var(--color-white);
  }
`;

const PeopleModalButton = styled.div`
  position: fixed;
  left: 50%;
  transform: translateX(-50%);
  bottom: 60px;
  border-radius: 20px 20px 0 0;
  padding: 20px;
  width: 100%;
  max-width: 600px;
  height: 85px;
  box-shadow: 0 4px 15px 0 rgba(0, 74, 123, 0.4);
  background: var(--color-white);
  display: flex;
  align-items: center;
  flex-direction: column;
  gap: 20px;
  z-index: 10;
  cursor: pointer;
  transition: var(--transition);

  .darkMode & {
    background: var(--color-darkgray2);
  }
`;

const ModalClose = styled.div`
  background: url(${ModalArrow}) no-repeat center / contain;
  width: 12.8px;
  aspect-ratio: 1 / 0.472813;
  cursor: pointer;
  transition: var(--transition);

  &.collapsed {
    transform: rotate(180deg);
  }

  .darkMode & {
    filter: invert(10);
  }
`;

const ModalContent = styled.div`
  flex: 1;
  width: 100%;
  display: flex;
  align-items: center;
  gap: 10px;
  transition: var(--transition);

  .icon {
    background: url(${IconHeart}) no-repeat center / contain;
    width: 20px;
    aspect-ratio: 1 /1;
    transition: var(--transition);
  }

  .icon.active {
    background-image: url(${IconHeartAcitve});
  }

  .price {
    font-weight: 600;
    font-size: 14px;
    line-height: 130%;
    color: var(--color-black);
    transition: var(--transition);
  }

  .desc {
    flex: 1;
    font-weight: 400;
    font-size: 12px;
    line-height: 130%;
    color: var(--color-darkgray);
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    transition: var(--transition);
  }

  .darkMode & .price {
    color: var(--color-bg2);
  }

  .darkMode & .desc {
    color: var(--color-gray);
  }
`;

const PeopleTopBox = styled.div`
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 10px;
`;

const PeopleIcon = styled.div`
  background: url(${IconHeart}) no-repeat center / contain;
  width: 20px;
  aspect-ratio: 1 /1;

  &.active {
    background-image: url(${IconHeartAcitve});
  }
`;

const PeopleTxtBox = styled.div`
  flex: 1;
  width: 100%;
  display: flex;
  align-items: center;
  gap: 10px;

  .price {
    font-family: var(--second-family);
    font-weight: 700;
    font-size: 18px;
    line-height: 130%;
    color: var(--color-black);
    transition: var(--transition);
  }

  .desc {
    flex: 1;
    font-weight: 400;
    font-size: 14px;
    line-height: 130%;
    color: var(--color-darkgray);
    transition: var(--transition);
  }

  .darkMode & .price {
    color: var(--color-bg2);
  }

  .darkMode & .desc {
    color: var(--color-gray);
  }

  @media screen and (max-width: 320px) {
    flex-direction: column;
    align-items: flex-start;
    gap: 4px;
  }
`;

const PeopleInputBox = styled.div`
  width: 100%;
  padding: 20px 0 0;
  border-top: 1px solid var(--color-input);
  display: flex;
  flex-direction: column;
  gap: 20px;
  transition: var(--transition);

  .darkMode & {
    border-top: 1px solid var(--color-gray);
  }
`;

const PeopleInputItem = styled.div`
  display: flex;
  flex-direction: column;
  gap: 10px;

  .input-group {
    flex-direction: row;
    gap: 8px;
  }

  .input-group .inputbox {
    flex: 1;
  }

  .input-group .inputbox input {
    text-align: right;
    padding: 10px 16px;
  }
`;

const PeopleInputTitBox = styled.div`
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 10px;
`;

const PeopleInputTitle = styled.p`
  flex: 1;
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 16px;
  line-height: 130%;
  color: var(--color-darkgray);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-gray);
  }
`;

const PeopleInputDesc = styled.p`
  font-size: 14px;
  line-height: 130%;
  text-align: right;
  color: var(--color-darkgray);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-gray);
  }
`;

const PlusButton = styled.button`
  background: url(${IconPlus}) no-repeat center / contain;
  width: 40px;
  aspect-ratio: 1 /1;
`;

const MinusButton = styled.button`
  background: url(${IconMinus}) no-repeat center / contain;
  width: 40px;
  aspect-ratio: 1 /1;
`;

const DetailMainBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 20px;
  border-bottom: 1px solid var(--color-border);
  padding-bottom: 30px;
  margin-bottom: 10px;
  transition: var(--transition);

  .darkMode & {
    border-color: var(--color-gray);
  }
`;

const DetailMainImg = styled.img`
  width: 100%;
  border-radius: 10px;
`;

const DetailMainTxt = styled.p`
  font-weight: 400;
  font-size: 12px;
  line-height: 130%;
  color: var(--color-darkgray);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-border);
  }
`;

const DetailNotiBox = styled.div`
  width: 100%;
  margin-top: 10px;
  border-bottom: 1px solid var(--color-border);
  padding-bottom: 30px;
  display: flex;
  flex-direction: column;
  gap: 10px;
  transition: var(--transition);

  .darkMode & {
    border-color: var(--color-gray);
  }
`;

const DetailSmallTitle = styled.p`
  font-family: var(--font-family);
  font-weight: 600;
  font-size: 14px;
  line-height: 130%;
  color: var(--color-black);
  transition: var(--transition);

  &.blue {
    color: var(--color-default);
  }

  .darkMode & {
    color: var(--color-bg2);
  }
`;

const DetailNotiList = styled.div`
  display: flex;
  flex-direction: column;
  gap: 14px;
`;

const DetailNotiItem = styled.div`
  position: relative;
  font-weight: 400;
  font-size: 12px;
  line-height: 130%;
  color: var(--color-darkgray);
  padding-left: 0.9em;
  transition: var(--transition);

  &::before {
    content: "";
    border-radius: 100px;
    background: var(--color-point);
    width: 3px;
    aspect-ratio: 1 / 1;
    position: absolute;
    left: 0;
    top: 0.5em;
    transition: var(--transition);
  }

  .darkMode & {
    color: var(--color-border);
  }
`;

const DetailMapBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 14px;

  img {
    width: 100%;
  }
`;

const DetailSpotBox = styled.div`
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 10px;
`;

const DetailSpotList = styled.div`
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 20px;
`;

const DetailSpotItem = styled.div`
  display: flex;
  flex-direction: column;
  gap: 8px;
  width: 100%;

  .swiper {
    width: 100%;
    border-radius: 10px;
    margin-bottom: 6px;
  }

  .swiper .swiper-button-prev,
  .swiper .swiper-button-next {
    width: 24px;
    height: auto;
    aspect-ratio: 1 / 1;
    display: flex;
    background: no-repeat center / contain;
    margin: 0;
    transform: translateY(-50%);
  }

  .swiper .swiper-button-prev.swiper-button-lock,
  .swiper .swiper-button-next.swiper-button-lock {
    display: none;
  }

  .swiper .swiper-button-prev {
    background-image: url(/src/assets/img/slider_left.png);
  }

  .swiper .swiper-button-next {
    background-image: url(/src/assets/img/slider_right.png);
  }
`;

const DetailSpotImg = styled.img`
  width: 100%;
  border-radius: 10px;
`;

const DetailSpotTitle = styled.div`
  font-weight: 600;
  font-size: 14px;
  line-height: 130%;
  color: var(--color-default);
  transition: var(--transition);
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  gap: 10px;

  & .txt {
    flex: 1;
  }

  & .time {
    background: var(--color-point);
    color: #fff;
    border-radius: 100px;
    padding: 2px 6px;
    font-size: 0.8em;
    transition: var(--transition);
  }

  .darkMode & {
    color: var(--color-point);
  }

  .darkMode & .time {
    background: var(--color-darknavy);
  }
`;

const DetailSpotDesc = styled.div`
  font-weight: 400;
  font-size: 12px;
  line-height: 130%;
  color: var(--color-darkgray);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-border);
  }
`;

const PlanDetails = () => {
  const [peopleShow, setPeopleShow] = useState(false);
  const [customizeShow, setCustomizeShow] = useState(false);
  const [detailShow, setDetailShow] = useState(false);

  const peopleModalClose = () => setPeopleShow(false);
  const peopleModalShow = () => setPeopleShow(true);

  const customizeModalClose = () => setCustomizeShow(false);
  const customizeModalShow = () => setCustomizeShow(true);

  const [isActive1, setIsActive1] = useState(false);
  const [isActive2, setIsActive2] = useState(false);
  const [isActive3, setIsActive3] = useState(false);
  const isAnyCardActive = isActive1 || isActive2 || isActive3;

  const detailModalClose = () => setDetailShow(false);
  const detailModalShow = () => setDetailShow(true);

  const [isIconActive, setIsIconActive] = useState(false);
  const [adultCount, setAdultCount] = useState(0);
  const [childCount, setChildCount] = useState(0);

  const handleAdultIncrement = () => setAdultCount(adultCount + 1);
  const handleAdultDecrement = () => setAdultCount(adultCount > 0 ? adultCount - 1 : 0);

  const handleChildIncrement = () => setChildCount(childCount + 1);
  const handleChildDecrement = () => setChildCount(childCount > 0 ? childCount - 1 : 0);

  const handleIconClick = () => {
    setIsIconActive(!isIconActive);
  };

  return (
    <>
      {/* Header */}
      <Header type="title" title="Plan Details" />

      {/* contents */}
      <PageContainer padding="p-0">
        <PageContent>
          <PlanPhotoBox>
            <PlanPhotoImg>
              <Swiper loop={true} speed="500" pagination={{ type: "fraction" }} modules={[Pagination]}>
                <SwiperSlide>
                  <Card.Img src={PlanImg} />
                </SwiperSlide>
                <SwiperSlide>
                  <Card.Img src={PlanImg} />
                </SwiperSlide>
              </Swiper>
            </PlanPhotoImg>
          </PlanPhotoBox>

          <PlanContent1>
            <PlanTitBox>
              <PlanTxtTitle>
                <span>4 Day 3 Night Modern Family Package</span>
              </PlanTxtTitle>
              <PlanTxtDesc>*Recommended 4 people for this plan*</PlanTxtDesc>
            </PlanTitBox>
            <CountBtnBox>
              <CountButton type="like" count="999" active="active"></CountButton>
              <CountButton type="chat" count="0"></CountButton>
              <CountButton type="share" count="0"></CountButton>
            </CountBtnBox>
            <CustomCalendar />
          </PlanContent1>

          <PlanContent2>
            <PlanTitBox className="cardver">
              <PlanTxtTitle>
                <span>Day 1</span>
                <PlanTime>2024-06-25 (Tuesday)</PlanTime>
              </PlanTxtTitle>
              <CardList className="cardList">
                <Card>
                  <Card.Img onClick={detailModalShow} src={PlanThum1} />
                  <CardIcon></CardIcon>
                  <Card.Body>
                    <div className="card_content">
                      <Card.Title onClick={detailModalShow}>Arrive at Hong Kong Intl. Airport</Card.Title>
                      <Card.Text>
                        After entering Hong Kong Airport, you will travel individually using taxi, public transportation, bus, etc. Click the “Change” button to
                        see more convenient options!
                      </Card.Text>
                    </div>
                    <div className="infobox">
                      <div className="left flex">
                        <BigButton onClick={detailModalShow}>Details</BigButton>
                        <BigButton onClick={customizeModalShow}>Change</BigButton>
                      </div>
                      <div className="right">
                        <p className="price_wrap">
                          Per person
                          <span className="price">USD $50</span>
                        </p>
                      </div>
                    </div>
                  </Card.Body>
                </Card>
                <Card>
                  <Card.Img onClick={detailModalShow} src={PlanThum2} />
                  <CardIcon></CardIcon>
                  <Card.Body>
                    <div className="card_content">
                      <Card.Title onClick={detailModalShow}>Enter the Shuttle Bus</Card.Title>
                      <Card.Text>
                        Travel to Macau via the world&apos;s longest bridge, with a total length of 55km, connecting Hong Kong, Macao and Zhuhai on mainland
                        China. The bus departs from Hong Kong, passes through Zhuhai, and arrives in Macau.
                      </Card.Text>
                    </div>
                    <div className="infobox">
                      <div className="left flex">
                        <BigButton onClick={detailModalShow}>Details</BigButton>
                        <BigButton onClick={customizeModalShow}>Change</BigButton>
                      </div>
                      <div className="right">
                        <p className="price_wrap">
                          Per person
                          <span className="price">USD $50</span>
                        </p>
                      </div>
                    </div>
                  </Card.Body>
                </Card>
                <Card>
                  <Card.Img onClick={detailModalShow} src={PlanThum3} />
                  <CardIcon></CardIcon>
                  <Card.Body>
                    <div className="card_content">
                      <Card.Title onClick={detailModalShow}>Macau 5-Hour Afternoon Tour</Card.Title>
                      <Card.Text>
                        You can see the casino resort and night view of Cotai, a world cultural heritage area where Portuguese history and culture that began in
                        the 16th century was completed in the 21st century, in one day. Meeting time is 3:30 PM Macau local time.
                      </Card.Text>
                    </div>
                    <div className="infobox">
                      <div className="left flex">
                        <BigButton onClick={detailModalShow}>Details</BigButton>
                        <BigButton onClick={customizeModalShow}>Change</BigButton>
                      </div>
                      <div className="right">
                        <p className="price_wrap">
                          Per person
                          <span className="price">USD $50</span>
                        </p>
                      </div>
                    </div>
                  </Card.Body>
                </Card>
                <Card>
                  <Card.Img onClick={detailModalShow} src={PlanThum2} />
                  <CardIcon></CardIcon>
                  <Card.Body>
                    <div className="card_content">
                      <Card.Title onClick={detailModalShow}>Enter the Shuttle Bus</Card.Title>
                      <Card.Text>
                        Travel to Macau via the world&apos;s longest bridge, with a total length of 55km, connecting Hong Kong, Macao and Zhuhai on mainland
                        China. The bus departs from Hong Kong, passes through Zhuhai, and arrives in Macau.
                      </Card.Text>
                    </div>
                    <div className="infobox">
                      <div className="left flex">
                        <BigButton onClick={detailModalShow}>Details</BigButton>
                        <BigButton onClick={customizeModalShow}>Change</BigButton>
                      </div>
                      <div className="right">
                        <p className="price_wrap">
                          Per person
                          <span className="price">USD $50</span>
                        </p>
                      </div>
                    </div>
                  </Card.Body>
                </Card>
                <Card>
                  <Card.Img onClick={detailModalShow} src={PlanThum4} />
                  <CardIcon></CardIcon>
                  <Card.Body>
                    <div className="card_content">
                      <Card.Title onClick={detailModalShow}>Arrive at the Hotel</Card.Title>
                      <Card.Text>
                        In need of a hotel recommendation? Click the “Change” button on the right to reserve a hotel prepared by our Go My Plan!
                      </Card.Text>
                    </div>
                    <div className="infobox">
                      <div className="left flex">
                        <BigButton onClick={detailModalShow}>Details</BigButton>
                        <BigButton onClick={customizeModalShow}>Change</BigButton>
                      </div>
                      <div className="right">
                        <p className="price_wrap">
                          Per person
                          <span className="price">USD $50</span>
                        </p>
                      </div>
                    </div>
                  </Card.Body>
                </Card>
              </CardList>
            </PlanTitBox>
          </PlanContent2>

          <PlanContent2>
            <PlanTitBox className="cardver">
              <PlanTxtTitle>
                <span>Day 2</span>
                <PlanTime>2024-06-26 (Wednesday)</PlanTime>
              </PlanTxtTitle>
              <CardList className="cardList">
                <Card>
                  <Card.Img onClick={detailModalShow} src={PlanThum5} />
                  <CardIcon></CardIcon>
                  <Card.Body>
                    <div className="card_content">
                      <Card.Title onClick={detailModalShow}>A Walk Around Hong Kong Island</Card.Title>
                      <Card.Text>
                        Without the hassle of public transportation! A trip to Hong Kong Island by private vehicle! Make smart use of your morning time during
                        your short Hong Kong trip! We will complete the sightseeing course in half a day in the morning.
                      </Card.Text>
                    </div>
                    <div className="infobox">
                      <div className="left flex">
                        <BigButton onClick={detailModalShow}>Details</BigButton>
                        <BigButton onClick={customizeModalShow}>Change</BigButton>
                      </div>
                      <div className="right">
                        <p className="price_wrap">
                          Per person
                          <span className="price">USD $50</span>
                        </p>
                      </div>
                    </div>
                  </Card.Body>
                </Card>
                <Card>
                  <Card.Img onClick={detailModalShow} src={PlanThum6} />
                  <CardIcon></CardIcon>
                  <Card.Body>
                    <div className="card_content">
                      <Card.Title onClick={detailModalShow}>Snap of Hong Kong attractions (1 hour, original photo + editing)</Card.Title>
                      <Card.Text>
                        A must-have for traveling to Hong Kong, take snapshots of Hong Kong that capture Hong Kong&apos;s sensibility, and take many photos of
                        your life in Hong Kong&apos;s Soho Street and Central in 1 hour!
                      </Card.Text>
                    </div>
                    <div className="infobox">
                      <div className="left flex">
                        <BigButton onClick={detailModalShow}>Details</BigButton>
                        <BigButton onClick={customizeModalShow}>Change</BigButton>
                      </div>
                      <div className="right">
                        <p className="price_wrap">
                          Per person
                          <span className="price">USD $50</span>
                        </p>
                      </div>
                    </div>
                  </Card.Body>
                </Card>
                <Card>
                  <Card.Img onClick={detailModalShow} src={PlanThum4} />
                  <CardIcon></CardIcon>
                  <Card.Body>
                    <div className="card_content">
                      <Card.Title onClick={detailModalShow}>Arrive at the Hotel</Card.Title>
                      <Card.Text>
                        In need of a hotel recommendation? Click the “Change” button on the right to reserve a hotel prepared by our Go My Plan!
                      </Card.Text>
                    </div>
                    <div className="infobox">
                      <div className="left flex">
                        <BigButton onClick={detailModalShow}>Details</BigButton>
                        <BigButton onClick={customizeModalShow}>Change</BigButton>
                      </div>
                    </div>
                  </Card.Body>
                </Card>
              </CardList>
            </PlanTitBox>
          </PlanContent2>

          <PlanContent2>
            <PlanTitBox className="cardver">
              <PlanTxtTitle>
                <span>Day 3</span>
                <PlanTime>2024-06-27 (Thursday)</PlanTime>
              </PlanTxtTitle>
              <CardList className="cardList">
                <Card>
                  <Card.Img onClick={detailModalShow} src={PlanThum7} />
                  <CardIcon></CardIcon>
                  <Card.Body>
                    <div className="card_content">
                      <Card.Title onClick={detailModalShow}>Free Time - The Day Before</Card.Title>
                      <Card.Text>
                        Enjoy your free time, a gift to yourself who is tired from touring ~ but if you&apos;re feeling energetic, click the &auot;Change&auot;
                        button to see the different options!
                      </Card.Text>
                    </div>
                    <div className="infobox">
                      <div className="left flex">
                        <BigButton onClick={detailModalShow}>Details</BigButton>
                        <BigButton onClick={customizeModalShow}>Change</BigButton>
                      </div>
                    </div>
                  </Card.Body>
                </Card>
                <Card>
                  <Card.Img onClick={detailModalShow} src={PlanThum4} />
                  <CardIcon></CardIcon>
                  <Card.Body>
                    <div className="card_content">
                      <Card.Title onClick={detailModalShow}>Enter the Shuttle Bus</Card.Title>
                      <Card.Text>
                        In need of a hotel recommendation? Click the &auot;Change&auot; button on the right to reserve a hotel prepared by our Go My Plan!
                      </Card.Text>
                    </div>
                    <div className="infobox">
                      <div className="left flex">
                        <BigButton onClick={detailModalShow}>Details</BigButton>
                        <BigButton onClick={customizeModalShow}>Change</BigButton>
                      </div>
                    </div>
                  </Card.Body>
                </Card>
              </CardList>
            </PlanTitBox>
          </PlanContent2>

          <PlanContent2>
            <PlanTitBox className="cardver">
              <PlanTxtTitle>
                <span>Day 4</span>
                <PlanTime>Day 4 2024-06-28 (Friday)</PlanTime>
              </PlanTxtTitle>
              <CardList className="cardList">
                <Card>
                  <Card.Img onClick={detailModalShow} src={PlanThum1} />
                  <CardIcon></CardIcon>
                  <Card.Body>
                    <div className="card_content">
                      <Card.Title onClick={detailModalShow}>Arrive at Hong Kong Intl. Airport</Card.Title>
                      <Card.Text>
                        After entering Hong Kong Airport, you will travel individually using taxi, public transportation, bus, etc. Click the “Change” button to
                        see more convenient options!
                      </Card.Text>
                    </div>
                    <div className="infobox">
                      <div className="left flex">
                        <BigButton onClick={detailModalShow}>Details</BigButton>
                        <BigButton onClick={customizeModalShow}>Change</BigButton>
                      </div>
                      <div className="right">
                        <p className="price_wrap">
                          Per person
                          <span className="price">USD $50</span>
                        </p>
                      </div>
                    </div>
                  </Card.Body>
                </Card>
              </CardList>
            </PlanTitBox>
          </PlanContent2>

          <PlanContent3>
            <ProfileBox to="/memberInfo">
              <ProfileImg src={Profile}></ProfileImg>
              <ProfileTxtBox>
                <ProfileTItle>GoGoHongKong</ProfileTItle>
                <ProfileDesc>
                  This is a 4 days and 3 nights plan to enjoy with family, friends, and lovers (in collaboration with 500,000 YouTuber Moochul Couple)
                </ProfileDesc>
              </ProfileTxtBox>
            </ProfileBox>

            <HowToBox>
              <PlanTxtTitle>
                <span>How to Book</span>
              </PlanTxtTitle>
              <HowToItem>
                <HowToIcon src={HowToIcon1}></HowToIcon>
                <HowToTxtBox>
                  <HowToTitle>Optimize Your Plan</HowToTitle>
                  <HowToDesc>Create at your schedule & budget</HowToDesc>
                </HowToTxtBox>
              </HowToItem>
              <HowToItem>
                <HowToIcon src={HowToIcon2}></HowToIcon>
                <HowToTxtBox>
                  <HowToTitle>Book + Down Payment</HowToTitle>
                  <HowToDesc>Get confirmation within 2 working days</HowToDesc>
                </HowToTxtBox>
              </HowToItem>
              <HowToItem>
                <HowToIcon src={HowToIcon3}></HowToIcon>
                <HowToTxtBox>
                  <HowToTitle>Depart After Payment</HowToTitle>
                  <HowToDesc>Enjoy your plan after payment confirmation</HowToDesc>
                </HowToTxtBox>
              </HowToItem>
            </HowToBox>

            <AddBox>
              <AddItem>
                <AddTitle>Terms and Conditions</AddTitle>
                <AddDesc>Go My Plan&apos;s package does not require group shopping center visits or collect additional costs during the itinerary.</AddDesc>
              </AddItem>
              <AddItem>
                <AddTitle>Cancellation Policy</AddTitle>
                <AddDesc>A full refund is available if your reservation is canceled 14 days prior to arrival.</AddDesc>
              </AddItem>
            </AddBox>
          </PlanContent3>

          <PlanContent4>
            <PlanTxtTitle>
              <span>3 Comments</span>
            </PlanTxtTitle>
            <CommentsList>
              <CommentsItem>
                <CommentsImg src={CommentProfile1}></CommentsImg>
                <CommentsTxtBox>
                  <CommentsTitle>
                    <span>HK100Travel </span>
                    <CommentsTime>3 days ago</CommentsTime>
                  </CommentsTitle>
                  <CommentsDesc>This is a great plan! Well done!</CommentsDesc>
                </CommentsTxtBox>
              </CommentsItem>
              <CommentsItem>
                <CommentsImg src={CommentProfile2}></CommentsImg>
                <CommentsTxtBox>
                  <CommentsTitle>
                    <span>StreetHKSnapPhoto</span>
                    <CommentsTime>5 months ago</CommentsTime>
                  </CommentsTitle>
                  <CommentsDesc>Very cool, will look into it</CommentsDesc>
                </CommentsTxtBox>
              </CommentsItem>
              <CommentsItem>
                <CommentsImg src={CommentProfile3}></CommentsImg>
                <CommentsTxtBox>
                  <CommentsTitle>
                    <span>EMJ Hong Kong Exp</span>
                    <CommentsTime>2024.07.13</CommentsTime>
                  </CommentsTitle>
                  <CommentsDesc>good job</CommentsDesc>
                </CommentsTxtBox>
              </CommentsItem>
            </CommentsList>
            <CommentsInputBox>
              <Form.Control as="textarea" rows={3} placeholder="Add a comment..." />
              <BigButton>Submit</BigButton>
            </CommentsInputBox>
          </PlanContent4>
        </PageContent>

        {/* People Modal Button */}
        <PeopleModalButton onClick={peopleModalShow}>
          <ModalClose className="collapsed"></ModalClose>
          <ModalContent>
            <div className="icon"></div>
            <p className="price">US $360 </p>
            <p className="desc">(2 people total, 3 options included)</p>
          </ModalContent>
        </PeopleModalButton>

        {/* People Modal */}
        <Modal show={peopleShow} onHide={peopleModalClose} className="type1">
          <Modal.Body>
            <ModalClose onClick={peopleModalClose}></ModalClose>
            <PeopleTopBox>
              <PeopleIcon className={`icon ${isIconActive ? "active" : ""}`} onClick={handleIconClick}></PeopleIcon>
              <PeopleTxtBox>
                <p className="price">US $360 </p>
                <p className="desc">(2 people total, 3 options included)</p>
              </PeopleTxtBox>
            </PeopleTopBox>
            <PeopleInputBox>
              <PeopleInputItem>
                <PeopleInputTitBox>
                  <PeopleInputTitle>Adults</PeopleInputTitle>
                  <PeopleInputDesc>US $180 per person</PeopleInputDesc>
                </PeopleInputTitBox>
                <InputGroup>
                  <Input placeholder="0" type="text" value={adultCount} readOnly />
                  <MinusButton onClick={handleAdultDecrement}></MinusButton>
                  <PlusButton onClick={handleAdultIncrement}></PlusButton>
                </InputGroup>
              </PeopleInputItem>
              <PeopleInputItem>
                <PeopleInputTitBox>
                  <PeopleInputTitle>Children</PeopleInputTitle>
                  <PeopleInputDesc>US $180 per person</PeopleInputDesc>
                </PeopleInputTitBox>
                <InputGroup>
                  <Input placeholder="0" type="text" value={childCount} readOnly />
                  <MinusButton onClick={handleChildDecrement}></MinusButton>
                  <PlusButton onClick={handleChildIncrement}></PlusButton>
                </InputGroup>
              </PeopleInputItem>
            </PeopleInputBox>
          </Modal.Body>
          <Modal.Footer>
            <BigButton onClick={peopleModalClose} className="ver2">
              Save Plan
            </BigButton>
            <BigButton onClick={peopleModalClose}>Book</BigButton>
          </Modal.Footer>
        </Modal>

        {/* Customize Modal */}
        <Modal show={customizeShow} onHide={customizeModalClose} className="type1">
          <Modal.Header closeButton className="sticky">
            <Modal.Title>Day 2 - Change plan for</Modal.Title>
          </Modal.Header>
          <Modal.Body>
            <CardList className="cardList ver2 change">
              <Card className="selected">
                <Card.Img src={PlanDetailThum1} />
                <CardIcon></CardIcon>
                <Card.Body>
                  <div className="card_content">
                    <Card.Title>Free Itinerary</Card.Title>
                    <Card.Text>Add various options to complete your plan!</Card.Text>
                  </div>
                  <div className="infobox">
                    <div className="right">
                      <p className="price_wrap">
                        Per person
                        <span className="price">USD $0</span>
                      </p>
                    </div>
                  </div>
                  <div className="state">Current Plan</div>
                </Card.Body>
              </Card>
              <Card className={isActive1 ? "active" : ""} onClick={() => setIsActive1(!isActive1)}>
                <Card.Img src={PlanDetailThum2} />
                <CardIcon></CardIcon>
                <Card.Body>
                  <div className="card_content">
                    <Card.Title>Lorem Ipsum Dolor Sit Amet</Card.Title>
                    <Card.Text>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce turpis justo, iaculis in felis id, cursus dapibus nisi. Duis luctus
                      tincidunt odio eget maximus. Nam a risus eget enim interdum congue nec ut lectus consequat pellentesque.
                    </Card.Text>
                  </div>
                  <div className="infobox">
                    <div className="right">
                      <p className="price_wrap">
                        Per person
                        <span className="price">USD $30</span>
                      </p>
                    </div>
                  </div>
                  <div className="state">Change to this Plan</div>
                </Card.Body>
              </Card>
              <Card className={isActive2 ? "active" : ""} onClick={() => setIsActive2(!isActive2)}>
                <Card.Img src={PlanDetailThum3} />
                <CardIcon></CardIcon>
                <Card.Body>
                  <div className="card_content">
                    <Card.Title>Lorem Ipsum Dolor Sit Amet</Card.Title>
                    <Card.Text>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce turpis justo, iaculis in felis id, cursus dapibus nisi. Duis luctus
                      tincidunt odio eget maximus. Nam a risus eget enim interdum congue nec ut lectus consequat pellentesque.
                    </Card.Text>
                  </div>
                  <div className="infobox">
                    <div className="left flex">
                      <BigButton onClick={detailModalShow}>Details</BigButton>
                    </div>
                    <div className="right">
                      <p className="price_wrap">
                        Per person
                        <span className="price">USD $10</span>
                      </p>
                    </div>
                  </div>
                  <div className="state">Change to this Plan</div>
                </Card.Body>
              </Card>
              <Card className={isActive3 ? "active" : ""} onClick={() => setIsActive3(!isActive3)}>
                <Card.Img src={PlanDetailThum4} />
                <CardIcon></CardIcon>
                <Card.Body>
                  <div className="card_content">
                    <Card.Title>Lorem Ipsum Dolor Sit Amet</Card.Title>
                    <Card.Text>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce turpis justo, iaculis in felis id, cursus dapibus nisi. Duis luctus
                      tincidunt odio eget maximus. Nam a risus eget enim interdum congue nec ut lectus consequat pellentesque.
                    </Card.Text>
                  </div>
                  <div className="infobox">
                    <div className="right">
                      <p className="price_wrap">
                        Per person
                        <span className="price">USD $30</span>
                      </p>
                    </div>
                  </div>
                  <div className="state">Change to this Plan</div>
                </Card.Body>
              </Card>
            </CardList>
          </Modal.Body>
          <Modal.Footer className="border_none">
            <BigButton onClick={customizeModalClose} disabled={!isAnyCardActive}>Customize</BigButton>
          </Modal.Footer>
        </Modal>

        {/* Detail Modal */}
        <Modal show={detailShow} onHide={detailModalClose} className="type1">
          <Modal.Header closeButton className="sticky">
            <Modal.Title>Day 2 - Change plan for</Modal.Title>
          </Modal.Header>
          <Modal.Body>
            <DetailMainBox>
              <DetailMainImg src={DetailMain}></DetailMainImg>
              <DetailMainTxt>
                What if you plan to spend 5 hours in Macau?? We will pick out the key points and show you everything in a half day!
                <br /> <br />
                You can see the world cultural heritage area where Portuguese history and culture that began in the 16th century + the casino resort and night
                view in one day
                <br /> <br />
                Dinner is not included. However, the guide will do his best to help you with everything from meal information to the subsequent schedule.
                <br /> <br />
                Meeting time: 3:30 PM (Macau local time)
              </DetailMainTxt>
            </DetailMainBox>

            <ProfileBox>
              <ProfileImg src={Profile}></ProfileImg>
              <ProfileTxtBox>
                <ProfileTItle>GoGoHongKong</ProfileTItle>
                <ProfileDesc>
                  This is a 4 days and 3 nights plan to enjoy with family, friends, and lovers (in collaboration with 500,000 YouTuber Moochul Couple)
                </ProfileDesc>
              </ProfileTxtBox>
            </ProfileBox>

            <DetailNotiBox>
              <DetailSmallTitle>Tour Notice</DetailSmallTitle>
              <DetailNotiList>
                <DetailNotiItem>
                  This is a walking tour using public transportation. There may be large crowds at the tourist attractions you visit during the itinerary, so
                  please wear as light clothing as possible.
                </DetailNotiItem>
                <DetailNotiItem>This option includes walking distance, including stairs. We recommend wearing comfortable shoes.</DetailNotiItem>
                <DetailNotiItem>
                  lease go to the designated meeting location 10 minutes in advance and wait. Refunds are not possible for no-shows or late arrivals after the
                  option has started.
                </DetailNotiItem>
              </DetailNotiList>
            </DetailNotiBox>

            <DetailMapBox>
              <PlanTxtTitle>
                <span>View on Google Maps:</span>
              </PlanTxtTitle>
              <img src={Map} />
            </DetailMapBox>

            <DetailSpotBox>
              <PlanTxtTitle>
                <span>Spot(s) Visiting:</span>
              </PlanTxtTitle>
              <DetailSpotList>
                <DetailSpotItem>
                  <Swiper loop={true} speed="500" spaceBetween={10} navigation={true} modules={[Navigation]}>
                    <SwiperSlide>
                      <DetailSpotImg src={DetailSubimg1}></DetailSpotImg>
                    </SwiperSlide>
                    <SwiperSlide>
                      <DetailSpotImg src={DetailSubimg2}></DetailSpotImg>
                    </SwiperSlide>
                  </Swiper>
                  <DetailSpotTitle>
                    <span className="txt">1. The Outer Harbour Ferry Terminal</span>
                    <span className="time">19:00</span>
                  </DetailSpotTitle>
                  <DetailSpotDesc>
                    Please find your guide on the 1st floor of Macau Outer Ferry Terminal, in front of the Tourist Information Center.
                  </DetailSpotDesc>
                </DetailSpotItem>
                <DetailSpotItem>
                  <Swiper loop={true} speed="500" spaceBetween={10} navigation={true} modules={[Navigation]}>
                    <SwiperSlide>
                      <DetailSpotImg src={DetailSubimg2}></DetailSpotImg>
                    </SwiperSlide>
                    <SwiperSlide>
                      <DetailSpotImg src={DetailSubimg3}></DetailSpotImg>
                    </SwiperSlide>
                  </Swiper>
                  <DetailSpotTitle>
                    <span className="txt">2. Rua de Felicidade</span>
                    <span className="time">12:00</span>
                  </DetailSpotTitle>
                  <DetailSpotDesc>
                    Rua da Felicidade (literally translated as ‘Street of Happiness’) was once the heart of Macau’s red light district, which is how it got its
                    name. Nowadays, Rua da Felicidade is not only an authentic shopping street where you can buy local products, but there are also several
                    local restaurants serving Cantonese and Macanese food, including soup noodles, yum cha delicacies, and more. Other traditional shops include
                    products such as tea, dried meat, typical sweets and desserts, among others.
                  </DetailSpotDesc>
                </DetailSpotItem>
                <DetailSpotItem>
                  <Swiper loop={true} speed="500" spaceBetween={10} navigation={true} modules={[Navigation]}>
                    <SwiperSlide>
                      <DetailSpotImg src={DetailSubimg3}></DetailSpotImg>
                    </SwiperSlide>
                    <SwiperSlide>
                      <DetailSpotImg src={DetailSubimg4}></DetailSpotImg>
                    </SwiperSlide>
                  </Swiper>
                  <DetailSpotTitle>
                    <span className="txt">3. Senado Square</span>
                    <span className="time">12:00</span>
                  </DetailSpotTitle>
                  <DetailSpotDesc>
                    Senado Square or Senate Square (Portuguese: Largo do Senado, Chinese: 議事亭前地, Cantonese Yale: Yíh Sih Tìhng Chìhn Deih) is a town square
                    in Macau, China, and part of the UNESCO Historic Center. Macau World Cultural Heritage. It is shaped like an elongated triangle and connects
                    Largo do São Domingos at one end and Avenida de Almeida Ribeiro at the other. It covers an area of 3,700 square meters (4,425 square yards).
                  </DetailSpotDesc>
                </DetailSpotItem>
                <DetailSpotItem>
                  <Swiper loop={true} speed="500" spaceBetween={10} navigation={true} modules={[Navigation]}>
                    <SwiperSlide>
                      <DetailSpotImg src={DetailSubimg4}></DetailSpotImg>
                    </SwiperSlide>
                    <SwiperSlide>
                      <DetailSpotImg src={DetailSubimg5}></DetailSpotImg>
                    </SwiperSlide>
                  </Swiper>
                  <DetailSpotTitle>
                    <span className="txt">4. Saint Dominic&apos;s Church</span>
                    <span className="time">12:00</span>
                  </DetailSpotTitle>
                  <DetailSpotDesc>
                    The Church of St. Dominic (Chinese: 板樟堂, Portuguese: Igreja de São Domingos) is a late 16th-century Baroque church serving the cathedral
                    parish of the Roman Catholic Diocese of Macau. It is located in the peninsula part of the city in Largo de São Domingos, near the Leal
                    Senado building.
                  </DetailSpotDesc>
                </DetailSpotItem>
                <DetailSpotItem>
                  <Swiper loop={true} speed="500" spaceBetween={10} navigation={true} modules={[Navigation]}>
                    <SwiperSlide>
                      <DetailSpotImg src={DetailSubimg5}></DetailSpotImg>
                    </SwiperSlide>
                    <SwiperSlide>
                      <DetailSpotImg src={DetailSubimg1}></DetailSpotImg>
                    </SwiperSlide>
                  </Swiper>
                  <DetailSpotTitle>
                    <span className="txt">5. The Ruins of Saint Paul&apos;s</span>
                    <span className="time">12:00</span>
                  </DetailSpotTitle>
                  <DetailSpotDesc>
                    The Ruins of St. Paul&apos;s (Chinese: 大三巴牌坊, Portuguese: Ruínas de São Paulo) are the remains of a 17th-century Portuguese cathedral
                    in Macau, dedicated to Saint Paul, an apostle of Jesus. It is the most famous historical building.
                  </DetailSpotDesc>
                </DetailSpotItem>
              </DetailSpotList>
            </DetailSpotBox>
          </Modal.Body>
        </Modal>
      </PageContainer>

      {/* Footer */}
      <Footer className="modal_ver" />

      {/* Navigation */}
      <Nav />
    </>
  );
};

export default PlanDetails;
