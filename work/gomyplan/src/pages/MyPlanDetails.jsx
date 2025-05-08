import { useState } from "react";
import styled from "styled-components";

// react-bootstrap
import InputGroup from "react-bootstrap/InputGroup";
import Modal from "react-bootstrap/Modal";

// component
import Header from "../components/Header";
import Footer from "../components/Footer";
import Nav from "../components/Nav";
import PageContainer from "../components/PageContainer";
import PageContent from "../components/PageContent";
import Input from "../components/Input";
import BigButton from "../components/BigButton";

// img
import ModalArrow from "../assets/img/modal_arrow.png";
import IconMinus from "../assets/img/btn_minus.png";
import IconPlus from "../assets/img/btn_plus.png";

// style
const ReservationTopBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 20px;
  border-bottom: 1px solid var(--color-border);
  padding-bottom: 36px;
  margin-bottom: 30px;
  transition: var(--transition);

  .darkMode & {
    border-bottom: 1px solid var(--color-gray);
  }
`;

const ReservationTopTitBox = styled.div`
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  gap: 8px;
`;

const ReservationTitle = styled.p`
  flex: 1;
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

const ReservationBtnBox = styled.div`
  display: flex;
  align-items: center;
  gap: 8px;
`;

const ReservationButton = styled.button`
  box-shadow: 0 0 0px 2px rgba(0, 63, 136, 0.2);
  border-radius: 6px;
  padding: 4px 12px;
  background: var(--color-default);
  font-family: var(--second-family);
  font-weight: 600;
  font-size: 12px;
  line-height: 130%;
  text-align: center;
  color: var(--color-input);
  transition: var(--transition);

  &.delete {
    box-shadow: 0 0 0px 3px rgba(255, 206, 206, 0.5);
    background: #e60000;
    color: var(--color-white);
  }

  .darkMode &.delete {
    box-shadow: none;
  }
`;

const ReservationTopContent = styled.div`
  width: 100%;
  border-radius: 10px;
  padding: 14px;
  box-shadow: 0 4px 15px 0 rgba(0, 74, 123, 0.2);
  background: var(--color-white);
  transition: var(--transition);

  .price {
    font-family: var(--second-family);
    font-weight: 700;
    font-size: 18px;
    line-height: 130%;
    color: var(--color-black);
    transition: var(--transition);
  }

  .desc {
    font-weight: 400;
    font-size: 12px;
    line-height: 130%;
    color: var(--color-gray);
    transition: var(--transition);
  }

  .time {
    font-weight: 400;
    font-size: 14px;
    line-height: 130%;
    color: var(--color-darkgray);
    margin-top: 20px;
    transition: var(--transition);
  }

  .darkMode & {
    background: var(--color-darkgray2);
  }

  .darkMode & .price {
    color: var(--color-bg2);
  }

  .darkMode & .desc {
    color: var(--color-gray);
  }

  .darkMode & .time {
    color: var(--color-border);
  }
`;

const ReservationTopBtnBox = styled.div`
  display: flex;
  gap: 10px;
  flex-wrap: wrap;

  button {
    width: 100%;
  }

  .wid50 {
    width: calc((100% - 10px) / 2);
  }
`;

const PlanWrapper = styled.div`
  display: flex;
  flex-direction: column;
  gap: 40px;
  margin-bottom: 40px;
`;

const PlanBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 20px;
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

  span {
    flex: 1;
  }

  .darkMode & {
    color: var(--color-bg2);
  }
`;

const PlanDate = styled.span`
  font-family: var(--font-family);
  flex: unset !important;
  font-weight: 400;
  font-size: 12px;
  line-height: 130%;
  color: var(--color-black);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-bg2);
  }
`;

const PlanContents = styled.div`
  display: flex;
  flex-direction: column;
  gap: 20px;
`;

const PlanContentItem = styled.div`
  display: flex;
  flex-direction: column;
  gap: 4px;
`;

const PlanSubTitle = styled.div`
  font-weight: 600;
  font-size: 14px;
  line-height: 130%;
  color: var(--color-black);
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 10px;
  transition: var(--transition);

  .darkMode & {
    color: var(--color-bg2);
  }
`;

const PlanTime = styled.span`
  display: inline-flex;
  font-weight: 500;
  font-size: 12px;
  line-height: 130%;
  text-align: center;
  color: var(--color-white);
  border-radius: 4px;
  padding: 4px 10px;
  background: var(--color-default);
`;

const PlanDesc = styled.div`
  font-family: var(--font-family);
  font-weight: 400;
  font-size: 12px;
  line-height: 130%;
  color: var(--color-darkgray);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-gray);
  }
`;

const PlanPriceBox = styled.div`
  border-top: 1px solid var(--color-border);
  padding: 8px 0 14px;
  transition: var(--transition);

  .darkMode & {
    border-top: 1px solid var(--color-border);
  }
`;

const PlanPrice = styled.div`
  font-family: var(--second-family);
  font-weight: 700;
  font-size: 18px;
  line-height: 130%;
  text-align: right;
  color: var(--color-black);
  transition: var(--transition);

  .darkMode & {
    color: var(--color-bg2);
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
  justify-content: space-between;
  gap: 10px;
`;

const ModalTxtBox = styled.div`
  display: flex;
  align-items: center;
  gap: 10px;
  transition: var(--transition);

  .title {
    font-weight: 600;
    font-size: 14px;
    line-height: 130%;
    color: var(--color-black);
    transition: var(--transition);
  }

  .desc {
    font-weight: 400;
    font-size: 12px;
    line-height: 130%;
    color: var(--color-darkgray);
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    transition: var(--transition);
  }

  .darkMode & .title {
    color: var(--color-bg2);
  }

  .darkMode & .desc {
    color: var(--color-gray);
  }

  @media screen and (max-width: 320px) {
    max-width:50%;
  }
`;

const PeopleInputBox = styled.div`
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 20px;
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

const MyPlanDetails = () => {
  const [peopleShow, setPeopleShow] = useState(false);

  const peopleModalClose = () => setPeopleShow(false);
  const peopleModalShow = () => setPeopleShow(true);

  const [adultCount, setAdultCount] = useState(0);
  const [childCount, setChildCount] = useState(0);

  const handleAdultIncrement = () => setAdultCount(adultCount + 1);
  const handleAdultDecrement = () => setAdultCount(adultCount > 0 ? adultCount - 1 : 0);

  const handleChildIncrement = () => setChildCount(childCount + 1);
  const handleChildDecrement = () => setChildCount(childCount > 0 ? childCount - 1 : 0);

  return (
    <>
      {/* Header */}
      <Header type="title" title="My Plan Details" />

      {/* contents */}
      <PageContainer padding="LR">
        <PageContent>
          <ReservationTopBox>
            <ReservationTopTitBox>
              <ReservationTitle>Day Trip (Tour vs Snapshot)</ReservationTitle>
              <ReservationBtnBox>
                <ReservationButton>Edit</ReservationButton>
                <ReservationButton className="delete">Delete</ReservationButton>
              </ReservationBtnBox>
            </ReservationTopTitBox>
            <ReservationTopContent>
              <p className="price">US $130</p>
              <p className="desc">Plan no. 240116MFM_All_PL001</p>
              <p className="time">Reservation time : 2024-01-09 (21:03)</p>
            </ReservationTopContent>
            <ReservationTopBtnBox>
              <BigButton className="wid50 ver2">Plan Inquiry</BigButton>
              <BigButton className="wid50 ver2">Plan Memo</BigButton>
              <BigButton>Share Plan Link</BigButton>
            </ReservationTopBtnBox>
          </ReservationTopBox>
          <PlanWrapper>
            <PlanBox>
              <PlanTxtTitle>
                <span>Day 1</span>
                <PlanDate>2024-06-11 (Tuesday)</PlanDate>
              </PlanTxtTitle>
              <PlanContents>
                <PlanContentItem>
                  <PlanSubTitle> Individual transportation after arrival</PlanSubTitle>
                  <PlanDesc>Check out our options to make your transportation more convenient!</PlanDesc>
                </PlanContentItem>
                <PlanContentItem>
                  <PlanSubTitle> HZMB Shuttle Bus </PlanSubTitle>
                  <PlanDesc>
                    Travel to Macau via the world’s longest bridge, with a total length of 55km, connecting Hong Kong, Macao, and Zhuhai in Mainland China. Just
                    looking at the name of HZMB, it seems that it departs from Hong Kong, passes through Zhuhai, and arrives in Macao, but it is unusual in that
                    it departs near Hong Kong International Airport in Chek Lap Kok Island, not Hong Kong Island, and branches off toward Zhuhai and Macao near
                    the Macao-Zhuhai border respectively.
                  </PlanDesc>
                </PlanContentItem>
                <PlanPriceBox>
                  <PlanPrice>US $0</PlanPrice>
                </PlanPriceBox>
                <PlanContentItem>
                  <PlanSubTitle>
                    Macau 5 Hours PM Tour
                    <PlanTime>15:30</PlanTime>
                  </PlanSubTitle>
                  <PlanDesc>
                    What if you plan to spend 5 hours in Macau?? We will pick out the key points and show you everything in a half day! You can see the world
                    cultural heritage area where Portuguese history and culture that began in the 16th century + the casino resort and night view in one day.
                    Dinner is not included. However, the guide will do his best to help you with everything from meal information to the subsequent schedule.
                    Meeting time: 3:30 PM (Macau local time)
                  </PlanDesc>
                </PlanContentItem>
                <PlanPriceBox>
                  <PlanPrice>US $0</PlanPrice>
                </PlanPriceBox>
              </PlanContents>
            </PlanBox>
          </PlanWrapper>
        </PageContent>

        {/* People button */}
        <PeopleModalButton onClick={peopleModalShow}>
          <ModalClose className="collapsed"></ModalClose>
          <ModalContent>
            <ModalTxtBox>
              <p className="title">Adult </p>
              <p className="desc">US $20 per person</p>
            </ModalTxtBox>
            <ModalTxtBox>
              <p className="title">Child </p>
              <p className="desc">US $20 per person</p>
            </ModalTxtBox>
          </ModalContent>
        </PeopleModalButton>

        {/* People Modal */}
        <Modal show={peopleShow} onHide={peopleModalClose} className="type1">
          <Modal.Body>
            <ModalClose onClick={peopleModalClose}></ModalClose>
            <PeopleInputBox>
              <PeopleInputItem>
                <PeopleInputTitBox>
                  <PeopleInputTitle>Adults</PeopleInputTitle>
                  <PeopleInputDesc>US $20 per person</PeopleInputDesc>
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
                  <PeopleInputDesc>US $20 per person</PeopleInputDesc>
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
      </PageContainer>

      {/* Footer */}
      <Footer className="modal_ver" />

      {/* Navigation */}
      <Nav />
    </>
  );
};

export default MyPlanDetails;
