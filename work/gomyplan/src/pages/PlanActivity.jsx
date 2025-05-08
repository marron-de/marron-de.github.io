import { useState } from "react";
import styled from "styled-components";

// react-bootstrap
import Card from "react-bootstrap/Card";
import Form from "react-bootstrap/Form";

// Swiper
import { Swiper, SwiperSlide } from "swiper/react";
import "swiper/css";

// component
import Header from "../components/Header";
import Footer from "../components/Footer";
import Nav from "../components/Nav";
import PageContainer from "../components/PageContainer";
import PageContent from "../components/PageContent";
import PageBtnbox from "../components/PageBtnbox";
import BigButton from "../components/BigButton";

// img
import ActivityThum1 from "../assets/img/activity_img1.png";
import ActivityThum2 from "../assets/img/activity_img2.png";
import SpotThum1 from "../assets/img/spot_thum1.png";
import SpotThum2 from "../assets/img/spot_thum2.png";
import SpotThum3 from "../assets/img/spot_thum3.png";
import SpotThum4 from "../assets/img/spot_thum4.png";

// style
const ActivityBox = styled.div`
  flex: 1;
  display: flex;
  flex-direction: column;
  gap: 20px;
  margin-bottom: 20px;
`;

const ActivityTitBox = styled.div`
  display: flex;
  flex-direction: column;
  gap: 8px;
`;

const ActivityTitle = styled.div`
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

const ActivityCardList = styled.div`
  display: flex;
  flex-direction: column;
  gap: 10px;
  flex: 1;
  border-top: 1px solid var(--color-border);
  color: var(--color-black);
  padding: 20px 0;

  .card {
    flex-direction: row;
    border-radius: 10px;
    padding: 6px;
    box-shadow: 0 4px 15px 0 rgba(0, 74, 123, 0.2);
    background: var(--color-white);
    border: none;
    transition: var(--transition);
  }

  .card-img {
    width: 80px;
  }

  .card-body {
    flex: 1;
    padding: 0 8px;
    display: flex;
    align-items: center;
  }

  .card_content {
    display: flex;
    flex-direction: column;
    gap: 3px;
  }

  .card-title {
    font-family: var(--second-family);
    font-weight: 600;
    font-size: 14px;
    line-height: 130%;
    letter-spacing: -0.02em;
    color: var(--color-default);
    margin: 0;
    transition: var(--transition);
  }

  .card-text {
    font-weight: 500;
    font-size: 12px;
    line-height: 130%;
    color: var(--color-gray);
    margin: 0;
    transition: var(--transition);
  }

  .form-check.check_ver {
    width: 36px;
    display: flex;
  }

  .form-check.check_ver .form-check-input {
    width: 30px;
    background: var(--color-gray);
    border: 2px solid #afafaf;
  }

  .form-check.check_ver .form-check-input::before {
    background-image: url(/src/assets/img/icon_check2.png);
    width: 13px;
  }

  .form-check.check_ver .form-check-input:checked {
    background: var(--color-main);
    border: 2px solid #b6d8ff;
  }

  .form-check.check_ver .form-check-input:checked::before {
    background-image: url(/src/assets/img/icon_check_on.png);
  }

  .form-check.check_ver .form-check-label {
    display: none;
  }

  .darkMode & {
    border-top: 1px solid var(--color-gray);
  }

  .darkMode & .card {
    background: var(--color-darkgray2);
  }

  .darkMode & .card-title {
    color: var(--color-input);
  }

  .darkMode & .card-text {
    color: var(--color-border);
  }
`;

const ActivityTabSwiper = styled.div`
  width: calc(100% + 40px);
  margin: 0 -20px;

  .swiper {
    width: 100%;
    padding: 0 20px;
  }

  .swiper-slide {
    width: auto;
  }
`;

const ActivityTab = styled.button`
  font-weight: 500;
  font-size: 12px;
  line-height: 130%;
  text-align: center;
  color: var(--color-white);
  border: 3px solid var(--color-input);
  border-radius: 8px;
  padding: 8px 10px;
  background: var(--color-main);
  transition: var(--transition);

  .darkMode & {
    background: var(--color-darknavy);
    border: 3px solid var(--color-default);
  }
`;

const NoText = styled.p`
  font-family: var(--second-family);
  font-weight: 500;
  font-size: 18px;
  line-height: 130%;
  text-align: center;
  color: var(--color-gray);
  width: 100%;
  flex: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0.5;
  transition: var(--transition);

  .darkMode & {
    color: var(--color-white);
  }
`;

const PlanActivity = () => {
  // 임시 추가
  const [activityShow, setActivityShow] = useState(false);
  const [selectedCount, setSelectedCount] = useState(0);

  const ActivityClose = () => {
    setActivityShow(false);
  };
  const ActivityShow = () => {
    setActivityShow(true);
  };

  const handleCheckboxChange = (event) => {
    if (event.target.checked) {
      setSelectedCount(selectedCount + 1);
    } else {
      setSelectedCount(selectedCount - 1);
    }
  };

  return (
    <>
      {/* Header */}
      <Header type="search" placeholder="Activity search..." />

      {/* contents */}
      <PageContainer>
        <PageContent padding="LR">
          <ActivityBox>
            <ActivityTitBox>
              <ActivityTitle>Recommended Activities</ActivityTitle>
              <ActivityTabSwiper>
                <Swiper spaceBetween={8} slidesPerView="auto">
                  <SwiperSlide>
                    <ActivityTab onClick={ActivityShow}>Suggestions</ActivityTab>
                  </SwiperSlide>
                  <SwiperSlide>
                    <ActivityTab onClick={ActivityClose}>Category 1</ActivityTab>
                  </SwiperSlide>
                  <SwiperSlide>
                    <ActivityTab onClick={ActivityClose}>Category 2</ActivityTab>
                  </SwiperSlide>
                  <SwiperSlide>
                    <ActivityTab onClick={ActivityClose}>Category 3</ActivityTab>
                  </SwiperSlide>
                  <SwiperSlide>
                    <ActivityTab onClick={ActivityClose}>Category 4</ActivityTab>
                  </SwiperSlide>
                  <SwiperSlide>
                    <ActivityTab onClick={ActivityClose}>Category 5</ActivityTab>
                  </SwiperSlide>
                  <SwiperSlide>
                    <ActivityTab onClick={ActivityClose}>Category 6</ActivityTab>
                  </SwiperSlide>
                </Swiper>
              </ActivityTabSwiper>
            </ActivityTitBox>
            {!activityShow ? (
              <ActivityCardList>
                <NoText>
                  No related terms found.
                  <br />
                  Please enter a search term.
                </NoText>
              </ActivityCardList>
            ) : (
              <ActivityCardList>
                <Card>
                  <Card.Img src={ActivityThum1} />
                  <Card.Body>
                    <div className="card_content">
                      <Card.Title>Dumplings at Sham Shui Po</Card.Title>
                      <Card.Text>USD $50~</Card.Text>
                    </div>
                  </Card.Body>
                  <Form.Check type="checkbox" name="activity1" id="activity1" label="" className="check_ver" onChange={handleCheckboxChange} />
                </Card>

                <Card>
                  <Card.Img src={ActivityThum2} />
                  <Card.Body>
                    <div className="card_content">
                      <Card.Title>Limousine from Airport &gt; Hotel</Card.Title>
                      <Card.Text>USD $29~</Card.Text>
                    </div>
                  </Card.Body>
                  <Form.Check type="checkbox" name="activity2" id="activity2" label="" className="check_ver" onChange={handleCheckboxChange} />
                </Card>

                <Card>
                  <Card.Img src={SpotThum1} />
                  <Card.Body>
                    <div className="card_content">
                      <Card.Title>Tram Ride to Victoria Peak</Card.Title>
                      <Card.Text>USD $20~</Card.Text>
                    </div>
                  </Card.Body>
                  <Form.Check type="checkbox" name="activity1" id="activity1" label="" className="check_ver" onChange={handleCheckboxChange} />
                </Card>

                <Card>
                  <Card.Img src={SpotThum2} />
                  <Card.Body>
                    <div className="card_content">
                      <Card.Title>Tour Around Victoria Dockside</Card.Title>
                      <Card.Text>USD $10~</Card.Text>
                    </div>
                  </Card.Body>
                  <Form.Check type="checkbox" name="activity2" id="activity2" label="" className="check_ver" onChange={handleCheckboxChange} />
                </Card>

                <Card>
                  <Card.Img src={SpotThum3} />
                  <Card.Body>
                    <div className="card_content">
                      <Card.Title>Star Ferry to Harbour City</Card.Title>
                      <Card.Text>USD $5~</Card.Text>
                    </div>
                  </Card.Body>
                  <Form.Check type="checkbox" name="activity1" id="activity1" label="" className="check_ver" onChange={handleCheckboxChange} />
                </Card>

                <Card>
                  <Card.Img src={SpotThum4} />
                  <Card.Body>
                    <div className="card_content">
                      <Card.Title>View the Victoria Harbour</Card.Title>
                      <Card.Text>USD $0~</Card.Text>
                    </div>
                  </Card.Body>
                  <Form.Check type="checkbox" name="activity2" id="activity2" label="" className="check_ver" onChange={handleCheckboxChange} />
                </Card>
              </ActivityCardList>
            )}
          </ActivityBox>
        </PageContent>
        <PageBtnbox className="fixed">{activityShow && <BigButton className="ver2">Selected ({selectedCount})</BigButton>}</PageBtnbox>
      </PageContainer>

      {/* Footer */}
      <Footer />

      {/* Navigation */}
      <Nav />
    </>
  );
};

export default PlanActivity;
